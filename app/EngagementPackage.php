<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EngagementPackage extends Model
{
    protected $fillable = [
       'engagement_package_name', 'engagement_package_price',
   ];

    public function package()
    {
        return $this->hasMany('App\EngagementPackageGallery', 'engagement_package_id', 'id');
    }
}
