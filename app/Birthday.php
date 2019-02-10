<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    protected $fillable = [
        'birthday_name', 'birthday_thumbnail',
   ];
}
