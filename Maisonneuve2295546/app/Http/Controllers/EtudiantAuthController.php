<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ville;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::selectVilles();
        return view('Authentification.create',['villes'=>$villes]);
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
			'nom' =>'min:2|max:25',
			'adresse' =>'max :25',
			'ville_id'=>'exists :App\Models\Ville,id',
			'email'=>'required|email|unique:users',
			'telephone'=>'numeric|regex: ^\(\d{3}\)\s\d{3}-\d{4}',
			'date_naissance'=>'format:jj/mm/yyyy',
        ]);

        //if faux redirect()->back()->withErrors()->withInputs()

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        
        $etudiant =  new Etudiant;
        $etudiant->fill($request->all());
        $etudiant->name = $user->name;
        $etudiant->id = $user->id;
        $etudiant->save();

        return redirect()->back()->withSuccess('Utilisateur enregistré');
    }

    public function authentication(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if(!Auth::validate($credentials)){ 
            return redirect()->back()->withErrors(trans('auth.password'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        
        return redirect()->intended(route('forum.index'));
    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

}
