<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIntroRequest;
use App\Models\Intro;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        $intros = (new Intro)->newQuery();
        dd(Intro::first()->url);

        if (request()->has('search')) {
            $intros->where('name', 'Like', '%'.request()->input('search').'%');
        }

        if (request()->query('sort')) {
            $attribute = request()->query('sort');
            $sort_order = 'ASC';
            if (strncmp($attribute, '-', 1) === 0) {
                $sort_order = 'DESC';
                $attribute = substr($attribute, 1);
            }
            $intros->orderBy($attribute, $sort_order);
        } else {
            $intros->latest();
        }

        $intros = $intros->paginate(5)->onEachSide(2)->appends(request()->query());

        return inertia('Admin/Intro/Index', [
            'intros' => $intros,
            'filters' => request()->all('search'),
            'can' => [
                'create' => Auth::user()->can('permission create'),
                'edit' => Auth::user()->can('permission edit'),
                'delete' => Auth::user()->can('permission delete'),
            ]
        ]);
    }

    /**
     * @return Response|ResponseFactory
     */
    public function create(): Response|ResponseFactory
    {
        return inertia('Admin/Intro/Create');
    }

    /**
     * @param StoreIntroRequest $request
     * @return RedirectResponse
     */
    public function store(StoreIntroRequest $request): RedirectResponse
    {
        $intro = Intro::create($request->only(['title', 'description']));

        $path = $request->file('image')->storeAs('intros', $intro->getKeyName(),'public');
        dd($path);
        $intro->image()->create(['path' => $path]);

        return redirect()->route('intro.index')
            ->with('message', __('Intro created successfully.'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Intro $intro
     * @return \Illuminate\Http\Response
     */
    public function show(Intro $intro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Intro $intro
     * @return \Illuminate\Http\Response
     */
    public function edit(Intro $intro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Intro $intro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intro $intro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Intro $intro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intro $intro)
    {
        //
    }
}
