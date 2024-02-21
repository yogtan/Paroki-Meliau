<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('documents')->get();

        return view('sekretariat.sekretariat', compact('categories'));
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
     * @param  \App\Http\Requests\StoreDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function show_create()
    {

        return view('admin.dokumen.admin-dokumen');
    }

    public function store(StoreDocumentRequest $request)
    {
        // dd($request->all());
        $request->validate([
            'categories_id' => 'required',
            'title' => 'required',
            'file' => 'required|mimes:pdf'
        ]);

        $dokumen = $request->file('file');
        $path = time() . '_' .   $request->title . '.' . $dokumen->getClientOriginalExtension();



        Storage::disk('local')->put('public/document/' . $path, file_get_contents($dokumen));

        Document::create([
            'categories_id' => $request->categories_id,
            'title' => $request->title,
            'file' => $path,
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Category::with('documents')->get();

        return view('admin.dokumen.admin-dokumen', compact('categories'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocumentRequest  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show_update(Document $document)
    {
        $categories = Category::all();
        return view('admin.dokumen.edit-dokumen', compact('document', 'categories'));
    }

    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf',
        ]);

        $dokumen = $request->file('file');
        $path = time() . '_' .   $request->title . '.' . $dokumen->getClientOriginalExtension();

        Storage::disk('local')->put('public/document/' . $path, file_get_contents($dokumen));

        $document->update([
            'title' => $request->title,
            'file' => $path,
        ]);
        return Redirect::route('admin_show_dokumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return Redirect::back();
    }
}
