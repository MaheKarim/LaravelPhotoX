<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portraitgallery extends Model
{
    protected $fillable = [
        'portrait_album_id', 'porttrait_album_thumbnail',
    ];
}
