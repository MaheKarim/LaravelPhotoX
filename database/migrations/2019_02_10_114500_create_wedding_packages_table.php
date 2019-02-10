<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeddingPackagesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('wedding_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wedding_package_name');
            $table->string('wedding_package_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('wedding_packages');
    }
}
