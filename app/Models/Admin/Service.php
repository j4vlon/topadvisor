<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected $fillable = ['title'];
    public function subservices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Subservice::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
