<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    
    public function home()
    {
        return view('layouts.home');
    }

    public function explore()
    {
        return view('explore.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = DB::table('users')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        ->orderBy('posts.created_at', 'desc')
        ->get();
        
        $searches = DB::table('users')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        ->where('posts.topic', 'like', '%' . strtolower(substr(request()->search, 0)) . '%')
        ->OrWhere('posts.title', 'like', '%' . request()->search . '%')
        ->OrWhere('users.name', 'like', '%' .  strtoupper(substr(request()->search, 0, 1)) . strtolower(substr(request()->search, 1)) . '%')
        ->get();

        return view('blog.index', [
            "posts" => $posts,
            "searches" => $searches
            ]);
        
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
        $validatedData = $request->validate([
            'topic' => ['required','string'],
            'title' => ['required','string','min:5'],
            'editor1' => ['required','string','min:50'],
        ]);

        $post = new Post;
        $post->user_id = Auth::id();
        $post->topic = strtolower($request->input('topic'));
        $post->title = $request->input('title');
        $post->body = $request->input('editor1');
        $post->save();

        return redirect("/blog")->with('success', 'Your post has been published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $posts = DB::table('users')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        ->where('post_id', 'LIKE', '%' . $post_id .  '%')
        ->get();
        
        return view('blog.show', ["posts" => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


