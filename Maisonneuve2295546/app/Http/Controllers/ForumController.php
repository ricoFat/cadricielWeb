<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //if(Auth::check()){
        $posts = ForumPost::all(); //select * from forum_posts
        return view('forum.index', ['posts' => $posts]);
        //}
        //return redirect(route('login'));
    }

    /**index
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.ajouter' );
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Models\forumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(forumPost $forumPost)
    {
        return view('forum.show', ["forumPost" => $forumPost]);
    }
    
}
