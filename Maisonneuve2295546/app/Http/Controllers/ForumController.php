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
    public function show(ForumPost $forumPost)
    {
        return view('forum.show', ["forumPost" => $forumPost]);
    }
    
    public function edit(ForumPost $forumPost)
    {
        return view('forum.edit', ['forumPost' => $forumPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumPost $forumPost)
    {
        $forumPost->update([
            'title'=>$request->titre, 
            'body'=>$request->contenu
        ]);

        return redirect(route('forum.show', $forumPost));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(forumPost $forumPost)
    {
        $forumPost->delete();
        return redirect(route('forum.index'));
    }

     /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request;
       $newPost = ForumPost::create([
         'titre'=> $request->titre,
         'contenu'=> $request->contenu,
         'titre_en'=> $request->titre_en,
         'contenu_en'=> $request->contenu_en,
         'etudiant_id'=> $request->etudiant_id
       ]);
       return redirect( route('forum.show', $newPost->id)); 
    }
}
