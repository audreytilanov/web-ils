<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentGalleryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_gallery_videos')->insert([
            [
                'title'=>'Our Videos',
                'image'=>'',
                'link_yt'=>'',
                'status'=>'header'
            ],

            [
                'title'=>'Security isn’t just a technology problem it’s about design, too',
                'image'=>'insta-1.jpg',
                'link_yt'=>'https://youtu.be/lnXXfYA91Y8',
                'status'=>'sub'
            ],

            [
                'title'=>'Get Ready To Up Your Creative Game With The',
                'image'=>'insta-2.jpg',
                'link_yt'=>'https://youtu.be/cwKYh2geaik',
                'status'=>'sub'
            ],

            [
                'title'=>'Traditional design won’t save us in the COVID-19 era',
                'image'=>'insta-3.jpg',
                'link_yt'=>'https://youtu.be/gMHP8ZXvuMM',
                'status'=>'sub'
            ],

            [
                'title'=>'New: Freehand Templates, built for the whole team',
                'image'=>'insta-4.jpg',
                'link_yt'=>'https://youtu.be/vKMeRMAVaDw',
                'status'=>'sub'
            ],

            [
                'title'=>'The 1 tool that helps remote teams collaborate better',
                'image'=>'insta-5.jpg',
                'link_yt'=>'https://youtu.be/jm21Flj-dHE',
                'status'=>'sub'
            ],
        ]);
    }
}
