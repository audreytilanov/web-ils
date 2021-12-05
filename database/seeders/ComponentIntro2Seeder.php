<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ComponentIntro2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_intro2s')->insert([
            [
                'title'=>'Hal - Hal Menarik di Bali',
                'desc'=>'yang wajib dinikmati',
                'image'=>'Welcome-to-Bali.jpg',
                'status'=>'primary'
            ],

            [
                'title'=>'Pantai Kuta',
                'desc'=>'Kecamatan Kuta, selatan Kota Denpasar',
                'image'=>'First_Place-Pantai_Kuta.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Gunung Batur',
                'desc'=>'Kecamatan Kintamani, Kabupaten Bangli',
                'image'=>'Second_Place-Gunung_Batur.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Pura Tanah Lot',
                'desc'=>'Desa Beraban, Kecamatan Kediri, Kabupaten Tabanan',
                'image'=>'Third_Place-Pura_Tanah_Lot.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Air Terjun Tegenungan',
                'desc'=>'Desa Kemenuh, Kecamatan Sukawati, Kabupaten Gianyar',
                'image'=>'Fourth_Place-Air_Terjun_Tegenungan.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Tarian Kecak',
                'desc'=>'Seni khas Bali yang bercerita tentang Ramayana dan dimainkan oleh laki-laki',
                'image'=>'Fifth_Place-Tarian_Kecak.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Patung Garuda Wisnu Kencana',
                'desc'=>'Bukit Unggasan, Kabupaten Jimbaran',
                'image'=>'Sixth_Place-Patung_Garuda_Wisnu_Kencana.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Wayang Kulit Bali',
                'desc'=>'Pertunjukan wayang kulit Bali bertema spiritual (bagian utama atau pelengkap acara keagamaan) dan tema hiburan (mengenai isu sosial)',
                'image'=>'Seventh_Place-Wayang_Kulit_Bali.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Drama Sendratari',
                'desc'=>'Pertunjukan yang menggabungkan seni tari dan drama tanpa dialog yang mengangkat cerita tentang Ramayana',
                'image'=>'Eighth_Place-Drama_Sendratari.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Instrumen Gamelan',
                'desc'=>'Gamelan Bali sangat khas melalui bunyinya yang meledak-ledak, berkecepatan tinggi, serta bagian gending yang lebih dinamis',
                'image'=>'Ninth_Place-Instrumen_Gamelan.jpg',
                'status'=>'sub'
            ],
        ]);
    }
}
