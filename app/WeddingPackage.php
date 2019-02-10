<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingPackage extends Model
{
    protected $fillable = [
       'wedding_package_name', 'wedding_package_price',
   ];

    public function weddingpackage()
    {
        return $this->hasMany('App\WeddingPackageGallery', 'wedding_package_id', 'id');
    }
}
