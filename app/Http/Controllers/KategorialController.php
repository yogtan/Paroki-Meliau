<?php

namespace App\Http\Controllers;

use App\Models\Kategorial;
use App\Http\Requests\StoreKategorialRequest;
use App\Http\Requests\UpdateKategorialRequest;
use Illuminate\Support\Facades\Redirect;

class KategorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorials = Kategorial::all();
        return view('about.kategorial', compact('kategorials'));
    }

    public function index_detail($id)
    {
        $kategorial = Kategorial::find($id);
        $members = $kategorial->members;
        return view('about.detail-kategorial', compact('kategorial', 'members'));
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

    public function show_create()
    {
        return view('admin.kategorial.add-kategorial');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKategorialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategorialRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Kategorial::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return Redirect::route('admin_show_kategorial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategorial  $kategorial
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorial $kategorial)
    {
    }

    public function show_kategorial()
    {
        $kategorials = Kategorial::all();
        return view('admin.kategorial.admin-kategorial', compact('kategorials'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorial  $kategorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorial $kategorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategorialRequest  $request
     * @param  \App\Models\Kategorial  $kategorial
     * @return \Illuminate\Http\Response
     */
    public function update_kategorial(UpdateKategorialRequest $request, Kategorial $kategorial)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $kategorial->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return Redirect::route('admin_show_kategorial');
    }

    public function update_show(Kategorial $kategorial)
    {
        return view('admin.kategorial.edit-kategorial', compact('kategorial'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorial  $kategorial
     * @return \Illuminate\Http\Response
     */
    public function destroy_kategorial(Kategorial $kategorial)
    {
        $kategorial->delete();
        return Redirect::back();
    }
}
