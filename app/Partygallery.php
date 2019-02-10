<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partygallery extends Model
{
    protected $fillable = [
        'party_album_id', 'party_album_thumbnail',
    ];
}
