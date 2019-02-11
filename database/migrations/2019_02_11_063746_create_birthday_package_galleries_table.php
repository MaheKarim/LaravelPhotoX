<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirthdayPackageGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('birthday_package_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('birthday_package_id');
            $table->string('birthday_package_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('birthday_package_galleries');
    }
}
