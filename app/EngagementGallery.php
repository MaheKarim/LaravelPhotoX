<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EngagementGallery extends Model
{
    protected $fillable = [
        'engagement_album_id', 'engagement_album_image',
    ];

    //protected $primaryKey = 'engagement_album_id';
}
