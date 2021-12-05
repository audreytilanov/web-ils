<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildComponentPantaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('child_component_pantais')->insert([
            [
                'parent_id'=>'2',
                'image'=>'Kuta_Beach_1.jpg',
            ],

            [
                'parent_id'=>'2',
                'image'=>'Kuta_Beach_2.jpg',
            ],

            [
                'parent_id'=>'3',
                'image'=>'Pandawa_Beach.jpg',
            ],

            [
                'parent_id'=>'4',
                'image'=>'Sanur_Beach.jpg',
            ],
        ]);
    }
}
