<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom'
    ];

    static public function selectVilles()
    {
        $query = Ville::Select()
                    ->OrderBy('nom')
                    ->get();
        return $query;
    }
}

