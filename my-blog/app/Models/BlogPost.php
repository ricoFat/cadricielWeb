<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    // protected $timestamp = false;  will not use created_at

    protected $fillable =[
        'title',
        'body',
        'user_id'
    ];
}
