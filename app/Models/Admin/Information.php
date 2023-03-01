<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'informations';
    protected $fillable = [
        'info_direction_id',
        'meta_title',
        'title',
        'file_url'
    ];
    public static function storeFile($file)
    {
        $filename = $file->getClientOriginalName();
        $path = $file->store('uploads/docs', 'public');

        return static::create(['filename' => $filename, 'path' => '/storage/'.$path]);
    }

     function infodirection()
    {
        return $this->belongsTo(InfoDirection::class);
    }
}

