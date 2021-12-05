<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentPuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_puras')->insert([
            [
                'title'=>'Pura Terkenal di Bali - Pura Tanah Lot',
                'sub_title'=>'Salah satu pura paling suci di Bali. Terdapat dua candi di atas batu besar, yang pertama berada di atas batu dan yang kedua berada di tebing. Pura Tanah Lot adalah pura tempat pemujaan dewa penjaga laut dan terkenal dengan pemandangan matahari terbenamnya yang indah.',
                'desc_left'=>'Lokasi: Desa Beraban, Kecamatan Kediri, Kabupaten Tabanan (13 kilometer di sebelah selatan Kota Tabanan). Di pura ini, Pujawali (Odalan) diperingati setiap 210 hari sekali. Jatuhnya dekat dengan perayaan Galungan dan Kuningan, tepatnya pada Hari Suci Buda Wage (Buda Cemeng) Langkir.
                <br><br>Sejarah pura ini berdasarkan pada legenda abad ke-15, Dang Hyang Nirartha yang memindahkan batu karang (tempat bermeditasinya) ke tengah pantai dengan kekuatan spiritual. Batu karang tersebut diberi nama Tanah Lot yang artinya batukarang yang berada di tengah lautan. Semenjak peristiwa itu, Bendesa Beraban Sakti mengakui kesaktian Dang Hyang Nirartha dan menjadi pengikutnya untuk memeluk agama Hindu bersama dengan seluruh penduduk setempat.',
                'desc_right'=>'Pura Tanah lot mengalami abrasi dan pengikisan ombak dan angin. Pemerintah Bali melakukan pemasangan tetrapod sebagai pemecah gelombang dan sekaligus pembuatan karang buatan untuk memperkuat tebing di sekeliling pura. Daerah sekitar Tanah Lot juga telah ditata ulang mengingat Pura Tanah lot menjadi salah satu tujuan wisata di bali.
                <br><br>Untuk memasuki pura Tanah Lot Bali, wisatawan wajib membei tiket masuk. Harga tiket masuk pura Tanah Lot Bali akan dikenakan biaya yang berbeda berdasarkan kategori umur dan kendaraan. Kategori umur dibedakan antara dewasa (Rp20.000/orang) dan anak-anak (Rp15.000/orang). Sedangkan kategori kendaraan dibedakan menjadi kategori motor roda dua (Rp2.000/motor), kategori mobil roda empat (Rp5.000/mobil), dan kategori parkir bus (Rp10.000/bus).',
                'image1'=>'Pura_Tanah_Lot_2.jpeg',
                'image2'=> 'Pura_Tanah_Lot_1.jpeg'
            ],
        ]);
    }
}
