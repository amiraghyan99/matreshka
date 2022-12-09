<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIntroRequest;
use App\Http\Requests\UpdateIntroRequest;
use App\Models\Intro;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Inertia\Response;
use Inertia\ResponseFactory;

class IntroController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:intro list', ['only' => ['index', 'show']]);
        $this->middleware('can:intro create', ['only' => ['create', 'store']]);
        $this->middleware('can:intro edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:intro delete', ['only' => ['destroy']]);
    }

    /**
     * @return Response|ResponseFactory
     */
    public function index(): Response|ResponseFactory
    {
        $intros = (new Intro)->newQuery();
//        $intros->serachInTranslates();

//        $intros->when($key = request()->query('search'), function (Builder $query) use ($key) {
//            return $query->where('title->en', 'Like', '%'.$key.'%')
//                ->orWhere('title->ru', 'Like', '%'.$key.'%')
//                ->orWhere('description->en', 'Like', '%'.$key.'%')
//                ->orWhere('description->ru', 'Like', '%'.$key.'%');
//        });
//
//        if (request()->query('sort')) {
//            $sort_order = 'ASC';
//            $attribute = request()->query('sort');
//            if (strncmp($attribute, '-', 1) === 0) {
//                $sort_order = 'DESC';
//                $attribute = substr($attribute, 1);
//            }
//            $intros->orderBy($attribute, $sort_order);
//        } else {
//            $intros->latest();
//        }

        $intros = $intros->paginate(5)->onEachSide(2)->appends(request()->query());

        return inertia('Admin/Intro/Index', [
            'intros' => $intros,
            'filters' => request()->all('search'),
            'can' => [
                'create' => auth()->user()->can('intro create'),
                'edit' => auth()->user()->can('intro edit'),
                'delete' => auth()->user()->can('intro delete'),
            ],
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
     * @param  StoreIntroRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreIntroRequest $request): RedirectResponse
    {
        $intro = Intro::query()->create($request->only(['title', 'description']));

        $path = $request->file('image')->store('intros', 'public');

        $intro->image()->create(['path' => $path]);

        return redirect()->route('intro.index')
            ->with('message', __('Intro created successfully.'));
    }

    /**
     * @param  Intro  $intro
     * @return Response|ResponseFactory
     */
    public function show(Intro $intro): Response|ResponseFactory
    {
        return inertia('Admin/Intro/Show', [
            'intro' => $intro,
        ]);
    }

    /**
     * @param  Intro  $intro
     * @return Response|ResponseFactory
     */
    public function edit(Intro $intro): Response|ResponseFactory
    {
        return inertia('Admin/Intro/Edit', [
            'intro' => $intro,
        ]);
    }

    /**
     * @param  UpdateIntroRequest  $request
     * @param  Intro  $intro
     * @return RedirectResponse
     */
    public function update(UpdateIntroRequest $request, Intro $intro): RedirectResponse
    {
        $intro->update($request->only(['title', 'description']));

        if ($request->hasFile('image')) {
            if (Storage::delete($intro->image->path)) {
                $path = $request->file('image')->store('intros', 'public');
                $intro->image()->update(['path' => $path]);
            }
        }

        return redirect()->route('intro.index')
            ->with('message', __('Intro updated successfully'));
    }

    /**
     * @param  Intro  $intro
     * @return RedirectResponse
     */
    public function destroy(Intro $intro): RedirectResponse
    {
        if ($intro->image?->path) {
            Storage::delete($intro->image->path);
        }
        $intro->image()->delete();
        $intro->delete();

        return redirect()->route('intro.index')
            ->with('message', __('Intro deleted successfully'));
    }
}
