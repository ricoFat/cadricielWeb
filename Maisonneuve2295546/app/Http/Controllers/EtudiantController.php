<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $etudiants = Etudiant::all();
        return view("etudiant.index", ["etudiants"=>$etudiants]);
    }

    /**index
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::selectVilles();
        return view('etudiant.create',['villes'=>$villes] );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiantInfo)
    {
        $villes = Ville::selectVilles();
        return view('etudiant.show', ["etudiantInfo" => $etudiantInfo,]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $newEtudiant = Etudiant::create([
         'nom'=> $request->nom,
         'email'=> $request->email,
         'date_de_naissance'=> $request->date_de_naissance,
         'villes_id'=> $request->villes_id,
         'adresse'=>$request->adresse,
         'phone'=>$request->phone
       ]);
       return redirect( route('etudiant.show', $newEtudiant->id)); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiantInfo)
    {
        $villes = Ville::selectVilles();
        return view('etudiant.edit', ['etudiantInfo' => $etudiantInfo,
                                      'villes' => $villes ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiantInfo)
    {
        $etudiantInfo->update([
            'nom'=>$request->nom, 
            'email'=>$request->email,
            'adresse'=>$request->adresse,
            'phone'=>$request->phone,
            'date_de_naissance'=>$request->date_de_naissance,
            'villes_id'=>$request->villes_id
        ]);

        return redirect(route('etudiant.show', $etudiantInfo));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiantInfo)
    {
        $etudiantInfo->delete();
        return redirect(route('etudiant.index'));
    }

}
