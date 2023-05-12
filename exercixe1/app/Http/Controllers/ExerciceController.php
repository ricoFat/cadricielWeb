<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function resumePage()
    {
        return view('resume');
    }

    public function projetsPage()
    {
        return view('projects');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function contactForm(Request $request)
    {
        //return $request;
        return view('contact',['data'=> $request]);
    }
    
}
