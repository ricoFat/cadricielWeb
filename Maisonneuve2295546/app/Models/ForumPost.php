<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPost extends Model
{
    use HasFactory;

    
    protected $fillable =[
        'titre',
        'contenu',
        'date_creation',
        'etudiant_id'
    ];

    public function forumHasUser()
    {
        return $this->hasOne('App\Models\Etudiant', 'id','etudiant_id' );
    }

   
}

