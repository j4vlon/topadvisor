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

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
