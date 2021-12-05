<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ComponentBannerSeeder::class);
        $this->call(ComponentIntro1Seeder::class);
        $this->call(ComponentIntro2Seeder::class);
        $this->call(ComponentPembangunanSeeder::class);
        $this->call(ComponentSejarahSeeder::class);
        $this->call(ComponentWisataHiburanSeeder::class);
        $this->call(ComponentPantaiSeeder::class);
        $this->call(ChildComponentPantaiSeeder::class);
        $this->call(ComponentDesaSeeder::class);
        $this->call(ComponentPuraSeeder::class);
        $this->call(ComponentFoodSeeder::class);
        $this->call(ComponentGalleryVideoSeeder::class);
        $this->call(ComponentGalleryImageSeeder::class);
        $this->call(TableContentSeeder::class);
        $this->call(uSERSeeder::class);
    }
}
