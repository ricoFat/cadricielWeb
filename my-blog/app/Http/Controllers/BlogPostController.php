<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all();
        return view("blog.index", ["posts"=>$posts]);
    }

    /**index
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /*   $categories =  Category::select()
                       ->OrderBy('category')
                       ->get(); */
        $categories = Category::selectCategory();
        //return $categories;
        return view('blog.ajouter',['categories'=>$categories] );
    }
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request;
       $newPost = BlogPost::create([
         'title'=> $request->title,
         'body'=> $request->body,
         'categories_id'=> $request->categories_id,
         'user_id'=> 1
       ]);
       return redirect( route('blog.show', $newPost->id)); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        return view('blog.show', ["blogPost" => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title'=>$request->title, 
            'body'=>$request->body
        ]);

        return redirect(route('blog.show', $blogPost));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect(route('blog.index'));
    }

    public function query()
    {
        $blog = BlogPost::all();
        return $blog;
    }

    public function pages(){
        $blogs = BlogPost::Select()
                ->orderBy('title')
                ->paginate(5);

        return view('blog.pages', ['blogs' => $blogs]);        
    }

    public function showPdf(BlogPost $blogPost){

        $pdf = PDF::loadview('blog.show-pdf' , ['blogPost'=> $blogPost]);
        return $pdf->download('blog.pdf');
    }
}
