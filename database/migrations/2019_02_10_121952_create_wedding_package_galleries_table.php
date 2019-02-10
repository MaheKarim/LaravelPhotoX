<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingPackageGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('wedding_package_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wedding_package_id');
            $table->string('wedding_package_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('wedding_package_galleries');
    }
}
