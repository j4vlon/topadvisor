<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    use HasFactory;

    protected $fillable = [
        'meta_title',
        'meta_descr',
        'service_id',
        'title',
        'subtitle',
        'descr_title',
        'form_title',
        'descr',
        'default_txt',
        'file_url',
        'is_active',
    ];

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

    public function service(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }

    public function steps(){
        return $this->hasMany(Step::class);
    }
     public function benefits()
     {
         return $this->hasMany(Benefit::class);
     }
    public function articles()
    {
        return $this->hasMany(Project::class);
    }
}
