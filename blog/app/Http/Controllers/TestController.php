<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = 'Peter';
        return view('test',['name' => $name]);
    }

    public function formPage()
    {
        return view('form');
    }
}
