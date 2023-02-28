<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'infodirection_id',
        'meta_title',
        'title',
    ];

     function infodirection
    {
        return $this->belongsTo(InfoDirection::class);
    }
}

