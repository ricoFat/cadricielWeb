<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantAuthController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authentification.index');
    }
}
