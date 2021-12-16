<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentPurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_puras', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('sub_title');
            $table->text('desc_left');
            $table->text('desc_right');
            $table->string('image1');
            $table->string('image2');
            $table->integer('status_aktif')->default('1');
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
        Schema::dropIfExists('component_puras');
    }
}
