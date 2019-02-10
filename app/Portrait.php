<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portrait extends Model
{
    protected $fillable = [
        'portrait_name', 'portrait_thumbnail',
    ];
}
