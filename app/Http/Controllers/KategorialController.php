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
     * @param  \App\Http\Requests\StoreKategorialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategorialRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable|required',
        ]);

        Kategorial::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategorial  $kategorial
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorial $kategorial)
    {
        //
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
    public function update(UpdateKategorialRequest $request, Kategorial $kategorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorial  $kategorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorial $kategorial)
    {
        //
    }
}
