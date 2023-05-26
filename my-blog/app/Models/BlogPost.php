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
        'categories_id',
        'user_id'
    ];

    public function blogHasUser()
    {
        return $this->hasOne('App\Models\User', 'id','user_id' );
    }

    public function blogHasCategory()
    {
        return $this->hasOne('App\Models\Category', 'id','categories_id' );
    }
}
