<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_contents')->insert([
            [
                'id'=>1,
                'nama_component'=>'intro1',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>2,
                'nama_component'=>'intro2',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>3,
                'nama_component'=>'pembangunan',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>4,
                'nama_component'=>'sejarah',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>5,
                'nama_component'=>'tempat-wisata-hiburan',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>6,
                'nama_component'=>'pantai',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>7,
                'nama_component'=>'desa',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>8,
                'nama_component'=>'pura',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>9,
                'nama_component'=>'makanan-khas',
                'status_aktif'=>'aktif',
            ],

            [
                'id'=>10,
                'nama_component'=>'gallery-video',
                'status_aktif'=>'aktif',
            ],
        ]);
    }
}
