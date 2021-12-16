<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentWisataHiburansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_wisata_hiburans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc_left');
            $table->text('desc_right');
            $table->string('image');
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
        Schema::dropIfExists('component_wisata_hiburans');
    }
}
