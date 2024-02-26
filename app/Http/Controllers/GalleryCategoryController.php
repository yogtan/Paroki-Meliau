<?php

namespace App\Http\Controllers;

use App\Models\Gallery_Category;
use App\Http\Requests\StoreGallery_CategoryRequest;
use App\Http\Requests\UpdateGallery_CategoryRequest;
use Illuminate\Support\Facades\Redirect;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreGallery_CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGallery_CategoryRequest $request)
    {



        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        Gallery_Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);


        return Redirect::route('admin_show_album');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */

    public function show_create()
    {
        return view('admin.galeri.add-album');
    }

    public function show_album()
    {
        $albums = Gallery_Category::all();
        return view('admin.galeri.admin-galeri', compact('albums'));
    }

    public function show(Gallery_Category $gallery_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery_Category $gallery_Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGallery_CategoryRequest  $request
     * @param  \App\Models\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function update_show(Gallery_Category $album)
    {
        return view('admin.galeri.edit-album', compact('album'));
    }


    public function update(UpdateGallery_CategoryRequest $request, Gallery_Category $album)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $album->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return Redirect::route('admin_show_album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery_Category  $gallery_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery_Category $album)
    {
        $album->delete();
        return Redirect::route('admin_show_album');
    }
}
