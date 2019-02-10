<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewPost extends Model
{
    protected $fillable = [
        'name',
        'comment',
         'image',
    ];
}
