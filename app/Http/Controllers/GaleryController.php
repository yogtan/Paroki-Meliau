<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Gallery_Category;

use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\UpdateGaleryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_detail($id)
    {
        $album = Gallery_Category::find($id);

        // @dd($albums);
        $fotos = $album->fotos;
        return view('galeri.detail-galeri', compact('fotos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleryRequest $request, Gallery_Category $album)
    {
        $gallery_category_id = $album->id;

        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        foreach ($request->file('images') as $image) {
            $path = time() . '_' . $image->getClientOriginalName();

            Storage::disk('local')->put('public/' . $path, file_get_contents($image));

            Galery::create([
                'gallery_category_id' => $gallery_category_id,
                'image' => $path,
            ]);
        }

        return Redirect::route('admin_show_album');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    public function show_create(Gallery_Category $album)
    {
        return view('admin.galeri.add-foto', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleryRequest  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleryRequest $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $foto)
    {
    $foto->delete();
        return Redirect::back();
    }
}
