<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use Sluggable;
    protected $fillable = [
        'meta_title',
        'meta_descr',
        'member_id',
        'industry_id',
        'subservice_id',
        'service_id',
        'title',
        'short_descr',
        'descr',
        'read_time',
    ];

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

    public function member(){
        return $this->belongsTo(Member::class);
    }

    public function subservice()
    {
        return $this->belongsTo(Subservice::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
