<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentGalleryImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_gallery_images')->insert([
            [
                'image'=>'insta-1.jpg',
            ],

            [
                'image'=>'insta-2.jpg',
            ],
            
            [
                'image'=>'insta-3.jpg',
            ],

            [
                'image'=>'insta-4.jpg',
            ],

            [
                'image'=>'insta-5.jpg',
            ],

            [
                'image'=>'insta-6.jpg',
            ],
        ]);
    }
}
