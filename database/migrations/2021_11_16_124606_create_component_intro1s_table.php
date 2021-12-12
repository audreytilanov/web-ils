<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentIntro1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_intro1s', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc_left');
            $table->text('desc_right');
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
        Schema::dropIfExists('component_intro1s');
    }
}
