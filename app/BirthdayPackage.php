<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BirthdayPackage extends Model
{
    protected $fillable = ['birthday_package_name', 'birthday_package_price'];

    public function birthdaypackageany()
    {
        return $this->hasMany('App\BirthdayPackageGallery', 'birthday_package_id', 'id');
    }
}
