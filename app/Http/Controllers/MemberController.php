<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Kategorial;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
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
     * @param  \App\Http\Requests\StoreMemberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Kategorial $kategorial, Request $request)
    {
        $kategorials_id = $kategorial->id;
        $request->validate([
            'name' =>  'required',
            'jabatan' => 'required',
            'image' => 'required',
        ]);

        // dd($request->file('image'));
        $file = $request->file('image');
        // dd('image');
        $path = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        // @dd($kategorials_id);
        Member::create([
            'kategorials_id' => $kategorials_id,
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'image' => $path,
        ]);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }
    public function show_create(Kategorial $kategorial)
    {
        return view('admin.kategorial.add-members', compact('kategorial'));
    }

    public function show_romo()
    {
        $kategorial = Kategorial::find(1);
        // Akses data romo yang terkait dengan kategorial tersebut
        $romos = $kategorial->members;
        return view('about.romo', compact('romos'));
    }
    public function show_dpp()
    {
        $kategorial = Kategorial::find(2);
        // Akses data romo yang terkait dengan kategorial tersebut
        $dewans = $kategorial->members;
        return view('about.dewan-paroki', compact('dewans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMemberRequest  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function showupdate_member(Member $member)
    {
      
        return view('admin.kategorial.edit-members', compact('member'));
    }

    public function update_member(UpdateMemberRequest $request, Member $member)
    {
        $request->validate(([
            'name' => 'required',
            'jabatan' => 'required',
            'image' => 'required',
        ]));


        $file = $request->file('image');
        $path = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $member->update([
            'name' => $request->name,
            'jabatan' => $request->jabatan,
            'image' => $path,
        ]);
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return Redirect::back();
    }
}
