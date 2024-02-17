<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        if (request()->is('/')) {
            return view('home', compact('posts'));
        } else {
            return view('information.blog-berita', compact('posts'));
        }
    }
    public function index_detail($id)
    {
       $posts = Post::find($id);
       return view('information.detail-berita', compact('posts'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);


        // dd($request->file('image'));
        $file = $request->file('image');

        $path = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        Post::create([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content,
        ]);
        return Redirect::route('admin_show_posts');
    }

    public function show_create()
    {
        return view('admin.posts.add-posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $posts)
    {
        // $posts =  Posts::all();
        // return view('admin.admin-posts', compact('posts'));
    }
    public function show_posts()
    {
        $posts =  Post::all();
        return view('admin.posts.admin-posts', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }
    public function update_show(Post $post)
    {
        return view('admin.posts.edit-posts', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update_posts(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
        ]);

        $file = $request->file('image');
        $path = time() . '_' . $request->title . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $post->update([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content
        ]);
        return Redirect::route('admin_show_posts');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy_posts(Post $post)
    {
        $post->delete();

        return Redirect::back();
    }
}
