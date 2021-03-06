<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('categories_id');
            $table->string('icon')->nullable();
            $table->string('icon_type')->nullable();
            $table->integer('sr_order',false,true)->nullable();
            $table->string('img_icon')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->string('price_plan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
