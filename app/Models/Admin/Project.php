<?php

namespace App\Models\Admin;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
    public function partner()
    {
       return $this->belongsTo(Partner::class);
    }

    public function subservice()
    {
        return $this->belongsTo(Subservice::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
