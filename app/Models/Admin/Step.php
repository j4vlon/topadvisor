<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;
    protected $fillable = [
        'index',
        'descr'
    ];

    public function subservice(){
        return $this->belongsTo(Subservice::class);
    }
}
