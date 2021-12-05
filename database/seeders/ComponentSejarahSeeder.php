<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentSejarahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_sejarahs')->insert([
            [
                'header'=>'Sejarah Seputar Bali',
                'title'=>'Perkembangan Bali sebelum Indonesia Merdeka hingga Sekarang',
                'sub_title'=>'Banyak sekali hal yang telah berkembang di Bali. Berikut adalah pembahasannya.',
                'desc_left'=>'Perkembangan di Bali tidak dapat terlepas dari sejarah maupun peradaban masa lalunya, mulai dari peradaban Bali Kuno (masa pemerintahan dinasti Warmadewa) beralih ke jaman pertengahan (masa pemerintahan Raja Klungkung sampai Perang Puputan) dan berakhir ke jaman kolonial sampai era modern sekarang. 
                <br><br>40 tahun lalu, Bali masih sangat sepi oleh pengunjung mancanegara. Pada tahun 1975, seorang fotografer sekaligus peselancar bernama Clifford White berkunjung ke Bali dan mengambil beberapa foto akan keindahan pulau Bali untuk dipublikasikan.
                Kemudian, setelah beberapa tahun, Bali mengalami ledakan pengunjung mancanegara yang diperkirakan mencapai 4 juta pengunjung asing tiap tahunnya.',
                'desc_right'=>'Kini, Bali telah menjadi salah satu tempat liburan tropis terpopuler di Asia Tenggara. Pada tahun 2011, pengunjung mancanegara yang berkunjung ke Bali tercatat sebanyak 11,1 juta. Bali biasanya populer dan dikunjungi oleh kalangan backpacker, pasangan, dan peselancar yang tertarik oleh ombak besar, kuat, dan bersih.
                <br><br>Dilihat dari budayanya, Bali telah mengalami perubahan yang signifikan mulai dari adat, gaya hidup, perkembangan dan adat istiadat yang berubah atau diperbarui seiring dengan berkembangnya peraturan daerah dan negara. ',
                'image'=>'Sanur_Beach_1975_Now.jpg',
            ],
        ]);
    }
}
