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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        $posts = DB::table('users')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        // ->where('id', 'LIKE', '%' . Auth::user()->id .  '%')
        ->orderBy('posts.created_at', 'desc')
        ->get();
        
        return view('blog.index', ["posts" => $posts]);
        
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
            'title' => ['required','string','min:5','max:70'],
            'body' => ['required','string','min:50'],
        ]);

        $post = new Post;
        $post->user_id = Auth::id();
        $post->topic = $request->input('topic');
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect("/blog")->with('success', 'Your post has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
