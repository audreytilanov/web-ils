<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_contents', function (Blueprint $table) {
            $table->id();
            $table->enum('nama_component', ['intro1', 'intro2', 'pembangunan', 'sejarah', 'tempat-wisata-hiburan', 'pantai', 'desa', 'pura', 'makanan-khas', 'gallery-video']);
            $table->enum('status_aktif', ['aktif', 'nonaktif']);
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
        Schema::dropIfExists('table_contents');
    }
}
