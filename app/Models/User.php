<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function post(){
        return $this->hasMany(Post::class,);
        // return $this->hasMany(Post::class,'user_id','id');       //Only if we haven't define foreign key in table in laravel
    }
}


