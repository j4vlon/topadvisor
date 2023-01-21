<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'file_url',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
