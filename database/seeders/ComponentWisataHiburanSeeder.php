<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentWisataHiburanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_wisata_hiburans')->insert([
            [
                'slug'=> 'patung-garuda-wisnu-kencana',
                'title'=>'Bingung cari tempat wisata liburan? Yuk intip spot wisata liburan di Bali - Patung Garuda Wisnu Kencana (GWK)',
                'desc_left'=>'Lokasi: Bukit Unggasan, Kabupaten Jimbaran. (kompleks Taman Budaya Garuda Wisnu Kencana). Patung ini merupakan karya dari pematung terkenal di Bali, I Nyoman Nuarta. Monumen ini dikembangkan sebagai taman budaya dan menjadi ikon bagi pariwisata Bali dan Indonesia. Patung tersebut berwujud Dewa Wisnu / Dewa Pemelihara (Sthiti) dalam agama Hindu yang mengendarai burung Garuda.',
                'desc_right'=>'Patung ini dapat terlihat dari Kuta, Sanur, Nusa Dua hingga Tanah Lot. Patung Garuda Wisnu Kencana ini merupakan simbol dari misi penyelamatan lingkungan dan dunia. Patung ini terbuat dari campuran tembaga dan baja, tinggi, dan lebar. Patung ini lebih tinggi daripada Patung Liberty. Harga tiket masuk dibagi berdasarkan umur, kategori dewasa dikenakan tarif Rp85.000/orang, kategori anak (5-12 tahun) Rp 60.000/anak.',
                'image'=>'Patung_GWK.jpeg',
            ],

            [
                'slug'=> 'ubud-monkey-forest',
                'title'=>'Bingung cari tempat wisata liburan? Yuk intip spot wisata liburan di Bali - Ubud Monkey Forest',
                'desc_left'=>'Lokasi: Desa Padangtegal, Kabupaten Ubud. (cagar alam dan kompleks candi di Bali). Terdapat kurang lebih 749 ekor monyet ekor panjang (Macaca fascicularis) (63 jantan dewasa, 34 jantan muda, 219 betina dewasa, 29 betina muda, 167 juvenile 1 (2-3 tahun), 118 juvenile 2 (1-2 tahun), 63 Infant old (5-12 bulan) dan 56 infant.',
                'desc_right'=>'Tempat ini merupakan atraksi wisata populer di Ubud, diperkirakan angka wisatawan yang mengunjungi tempat ini mencapai 120.000 wisatawan per bulan. Hutan ini memiliki luas kira-kira 12,5 hektar dan masih akan dilakukan perluasan disebelah selatan kawasan dan berisi setidaknya 186 spesies pohon yang berbeda. Harga tiket masuk dibagi berdasarkan umur, kategori dewasa dikenakan tarif Rp80.000/orang, kategori anak (5-12 tahun) Rp60.000/anak.',
                'image'=>'Ubud_Monkey_Forest.jpeg',
            ],

            [
                'slug'=> 'air-terjun-tegenungan',
                'title'=>'Bingung cari tempat wisata liburan? Yuk intip spot wisata liburan di Bali - Air Terjun Tegenungan',
                'desc_left'=>'Lokasi: Desa Kemenuh, Kecamatan Sukawati, Kabupaten Gianyar (30 km dari Kota Denpasar). Ketinggian air terjun ini sekitar 15 meter. Airnya bersih dan bening, namun debit airnya sangat deras. Tempat ini juga sering digunakan untuk melakukan kegiatan ekstrem, seperti melompat dari puncak air terjun.',
                'desc_right'=>'Air Terjun ini sangat populer di telinga wisatawan mancanegara. Daya tariknya terletak pada pemandangan air terjun yang sangat memukau. Harga tiket masuk dibagi berdasarkan lokasi, kategori lokasi utama dikenakan tarif Rp20.000/orang, kategori lokasi atas air terjun dikenakan tarif Rp15.000/orang, dan tarif parkir mobil sebesar Rp5.000/mobil.',
                'image'=>'Air_Terjun_Tegenungan.jpeg',
            ],

            [
                'slug'=>'waterbom-park',
                'title'=>'Bingung cari tempat wisata liburan? Yuk intip spot wisata liburan di Bali - Waterbom Park',
                'desc_left'=>'Lokasi: Jl. Kartika Plaza, Tuban, Kuta, Kabupaten Badung (3KM dari Bandara Ngurah Rai). Waterbom Park atau Waterbom Bali adalah sebuah taman rekreasi air buatan yang menyediakan banyak wahana dan hiburan. Waterbom Bali berdiri sejak 1993 dan telah banyak memperoleh penghargaan sebagai water park terbaik di dunia.',
                'desc_right'=>'Wahana yang tersedia di waterpark ini seperti seluncuran Splashdown, The Boomerang, Race Track, Boogie Ride, Jungle Ride, Raft River, Macaroni Tube, Lazy River. Selain itu, juga ada hiburan lain seperti Euro Bungy, Bombastic, 3 Kids Slides, Pleasure Pool, Climbing Wall. Harga tiket masuk berkisar antara Rp280.000-Rp1.350.000 tergantung jumlah pengunjung dan paket yang diambil.',
                'image'=>'Waterbom_Park_Bali.jpeg',
            ],
        ]);
    }
}
