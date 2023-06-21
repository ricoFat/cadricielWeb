<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'adresse',
        'phone',
        'date_de_naissance',
        'villes_id',
    ];

    public function etudiantHasVille()
    {
        return $this->hasOne('App\Models\Ville', 'id','villes_id' );
    }
}
