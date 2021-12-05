<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_banners')->insert([
            [
                'title'=>'Interpersonal & Life Skill',
                'sub_title'=>'ILT TI Tahun 2021',
                'video_banner'=>'banner.mp4',
            ]
        ]);
    }
}
