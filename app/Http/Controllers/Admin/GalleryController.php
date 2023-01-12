<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:gallery list', ['only' => ['index', 'show']]);
        $this->middleware('can:gallery create', ['only' => ['create', 'store']]);
        $this->middleware('can:gallery edit', ['only' => ['edit', 'update']]);
        $this->middleware('can:gallery delete', ['only' => ['destroy']]);
    }

    public function index(): Response|ResponseFactory
    {
        $galleries = Gallery::query()->orderBy('position')->get();

//        dd($galleries->toArray());
//        foreach ($galleries as $key => $gallery) {
//            $images[$key] = $gallery->getFirstMedia('gallery')->toHtml();
//        }

        $can = $this->can();

        return inertia('Admin/Gallery/Index', compact('galleries', 'can'));
    }

    public function create(): Response
    {
        return inertia()->render('Admin/Gallery/Create');
    }

    public function store(Request $request, Gallery $gallery): RedirectResponse
    {
        $gallery->create()
            ->addMedia($request->file('image'))
            ->usingName(config('app.name'))
            ->toMediaCollection('gallery');

        return redirect()->route('gallery.index')->with('message', 'Image Uploaded Successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        $gallery->delete();

        return back();
    }

    public function move(Gallery $gallery): RedirectResponse
    {
        request()->validate([
            'position' => ['required', 'numeric'],
        ]);

        $gallery->update([
            'position' => round(request('position'), 5),
        ]);

        return back();
    }

    private function can(): array
    {
        return [
            'create' => auth()->user()->can('gallery create'),
            'edit' => auth()->user()->can('gallery edit'),
            'delete' => auth()->user()->can('gallery delete'),
        ];
    }
}
