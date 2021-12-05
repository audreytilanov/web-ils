<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentGalleryVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_gallery_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // $table->string('sub-title')->nullable();
            $table->string('image')->nullable();
            $table->string('link_yt')->nullable();
            $table->enum('status', ['header', 'sub']);
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
        Schema::dropIfExists('component_gallery_videos');
    }
}
