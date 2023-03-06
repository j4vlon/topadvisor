<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoDirection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];
    protected $table = 'info_directions';
    public function informations()
    {
        return $this->hasMany(Information::class);
    }
}
