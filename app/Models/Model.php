<?php

namespace App\Models;

use App\libraries\Date\DateFormat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    public function getCreatedAtAttribute($attr): array|string|\Illuminate\Contracts\Translation\Translator|\Illuminate\Contracts\Foundation\Application|null
    {
        return DateFormat::post($attr);
    }
}
