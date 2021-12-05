<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentIntro1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_intro1s')->insert([
            [
                'title'=>'Mengenal Bali - Pulau Dewata - Pulau Seribu Pura',
                'desc_left'=>'Pariwisata yang wajib dikunjungi ketika berlibur di Bali sangat beragam, seperti: pantai, gunung, pura, air terjun, dan lain-lain. Beberapa pariwisata di Bali bahkan sudah diakui keindahannya hingga mancangegara, seperti Pantai Kuta dan Sanur. Seni dan budaya di Bali tidak kalah kerennya lho.. Seni-budaya yang paling terkenal di Bali tentu tariannya. Namun, seni-budaya lainnya seperti patung, wayang, drama, dan instrumen juga tidak kalah menarik. Jangan sampai kelewatan yaa.',
                'desc_right'=>'Selain itu, tempat wisata lainnya seperti forest, theme park, patung, dan juga air terjun tidak kalah populer kok. Ubud Monkey Forest, Waterboom Bali, Patung GWK, dan Air Terjun Tegenungan pastinya sudah tidak asing lagi kan. Makanya... Ayuk simak teruss website ini, supaya tahu tempat-tempat wisata wajib dikunjungi di Bali yang tentunya akan kami ulas semenarik mungkin dan pastinya sangat informatif!',
            ]
        ]);
    }
}
