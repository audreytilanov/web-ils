<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentPantaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_pantais')->insert([
            [
                'slug' => 'general',
                'title'=>'Banyak Sekali Pantai di Bali, <br>Pantai Mana  yang kaliang ingin kunjungi?',
                'sub_title'=>'General',
                'desc_left'=>'Benar Sekali! Memang terdapat banyak pantai di Bali.
                Bahkan dapat dikatakan Bali mendapat pamor yang sangat tinggi karena memiliki banyak pantai yang indah dan tersebar di berbagai sudut provinsi Bali. <br>Berikut ini adalah rekomendasi pantai-pantai terbaik yang pastinya akan membuat liburan di Bali semakin lengkap lagi. 
                <br><br>
                Pertama ada Pantai Kuta, yang terkenal memiliki ombak bagus untuk olahraga berselancar yang cocok bagi peselancar pemula. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach).Berlokasi di Kecamatan Kuta, sebelah Selatan Kota Denpasar, Bali, Indonesia. Pantai Kuta dapat ditempuh dengan waktu sekitar 10 menit dari Bandara Internasional Ngurah Rai dalam kondisi jalanan lancar.',
                'desc_right'=>'Kedua ada Pantai Pandawa, dimana pantai ini terdapat dua tebing besar yang dipahat dengan enam patung (dari posisi tertinggi) yang diberi nama Dewi Kunti, Dharma Wangsa, Bima, Arjuna, Nakula, dan Sadewa. Berlokasi di Kuta Selatan, Kabupaten Badung, Bali. Pantai ini terletak di balik perbukitan dan sering disebut sebagai Pantai Rahasia (Secret Beach).
                <br><br>
                Pantai Sanur memiliki ombak yang cukup tenang, sehingga kurang cocok untuk berselancar, namun Pantai Sanur menyediakan fasilitas wisata Selam dan Snorkeling. Lokasi selam ini dapat digunakan oleh para penyelam dari semua tingkatan keahlian. Berlokasi di sebelah Timur Kota Denpasar, Bali. Pantai Sanur juga dikenal sebagai Sunrise beach (pantai Matahari terbit) sebagai lawan dari Pantai Kuta.
                ',
                'filter'=>'all',
                'status_tingkatan'=>'header'
            ],

            [
                'slug' => 'pantai-kuta',
                'title'=>'',
                'sub_title'=>'Pantai Kuta',
                'desc_left'=>'Pantai Kuta terkenal memiliki ombak bagus untuk olahraga berselancar yang cocok bagi peselancar pemula. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach).<br/><br/>
                Lokasi: Kecamatan Kuta, sebelah Selatan Kota Denpasar, Bali, Indonesia. Pantai Kuta dapat ditempuh dengan waktu sekitar 10 menit dari Bandara Internasional Ngurah Rai dalam kondisi jalanan lancar.',
                'desc_right'=>'Sebelum menjadi objek wisata, Pantai Kuta merupakan sebuah pelabuhan dagang. Produk lokal diperdagangkan kepada pembeli dari luar Bali. Pada abad ke-19, Mads Lange datang ke Bali dan mendirikan basis perdagangan di Kuta.
                <br><br>
                Sekarang, Pantai Kuta sudah tersedia beragam jenis tempat hiburan seperti bar, restoran, pertokoan, restoran, hotel, dan toko-toko kelontong, serta pedagang kaki lima di sepanjang pantai. Pengunjung tidak hanya dapat menikmati pemandangan pantai saja, namun juga sarana dan prasarana yang ada di sekitar Pantai Kuta.',
                'filter'=>'pantai-1',
                'status_tingkatan'=>'sub'
            ],

            [
                'slug' => 'pantai-pandawa',
                'title'=>'',
                'sub_title'=>'Pantai Pandawa',
                'desc_left'=>'Pantai Pandawa terdapat dua tebing besar yang dipahat dengan enam patung (dari posisi tertinggi) yang diberi nama Dewi Kunti, Dharma Wangsa, Bima, Arjuna, Nakula, dan Sadewa. <br/><br/>
                Lokasi: Kuta Selatan, Kabupaten Badung, Bali. Pantai ini terletak di balik perbukitan dan sering disebut sebagai Pantai Rahasia (Secret Beach).',
                'desc_right'=>'Selain tujuan wisata dan olahraga air, pantai ini juga dimanfaatkan untuk budidaya rumput laut karena kontur pantai yang landai dan ombak yang tidak sampai ke garis pantai. Cukup banyak wisatawan yang melakukan paralayang dari Bukit Timbis hingga ke Pantai Pandawa.
                <br><br>
                Pantai ini telah mengalami perbaikan sarana dan prasarana yang memadai karena minat wisatawan yang tinggi untuk berkunjung ke ini dan diharapkan Pantai Pandawa akan menjadi salah satu pilihan pantai terbaik di pulau Bali yang sejajar dengan pantai lain, seperti Pantai Kuta.',
                'filter'=>'pantai-2',
                'status_tingkatan'=>'sub'
            ],

            [
                'slug' => 'pantai-sanur',
                'title'=>'',
                'sub_title'=>'Pantai Sanur',
                'desc_left'=>'Pantai Sanur memiliki ombak yang cukup tenang, sehingga kurang cocok untuk berselancar, namun Pantai Sanur menyediakan fasilitas wisata Selam dan Snorkeling. Lokasi selam ini dapat digunakan oleh para penyelam dari semua tingkatan keahlian.
                <br/><br/>
                Lokasi: sebelah Timur Kota Denpasar, Bali. Pantai Sanur juga dikenal sebagai Sunrise beach (pantai Matahari terbit) sebagai lawan dari Pantai Kuta.',
                'desc_right'=>'Jarak antara bandara Internasional I Gusti Ngurah Rai dan kawasan wisata ini hanya berjarak sekitar 10 hingga 15 kilometer saja, sehingga wisatawan dapat menempuhnya dengan transportasi darat dan dalam waktu sekitar setengah jam.
                <br/><br/>
                Saat ini, sepanjang tempat wisata pantai Sanur sudah dilengkapi dengan penunjang wisata berupa hotel, restoran ataupun kafe-kafe kecil serta art shop. Selain itu, sepanjang garis pantai juga dibangun semacam area pejalan kaki yang sering kali digunakan sebagai jalur jogging oleh wisatawan ataupun masyarakat lokal.',
                'filter'=>'pantai-3',
                'status_tingkatan'=>'sub'
            ],
        ]);
    }
}
