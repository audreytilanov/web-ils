<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildComponentPantaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_component_pantais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('parent_id')->unsigned();
            $table->foreign('parent_id')->references('id')->on('component_pantais')->onDelete('cascade');
            $table->string('image');
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
        Schema::dropIfExists('child_component_pantais');
    }
}
