<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    protected $fillable = [
        'engagement_name', 'engagement_thumbnail',
    ];
}
