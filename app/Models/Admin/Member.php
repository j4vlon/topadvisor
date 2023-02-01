<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function articles(){
       return $this->hasMany(Article::class);
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

}
