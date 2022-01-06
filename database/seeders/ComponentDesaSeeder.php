<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_desas')->insert([
            [
                'slug'=> 'desa-pelingpuran',
                'title'=>'Desa Penglipuran',
                'sub_title'=>'Desa adat ini terletak di Kelurahan Kubu, Kabupaten Bangli. (dataran tinggi sekitar kaki Gunung Batur).
                <br>Untuk memasuki desa ini, wisatawan harus memarkirkan kendaraan roda dua atau roda empat di lahan parkir yang telah disediakan.',
                'desc_left'=>'Wisatawan akan merasakan suasana yang tenang dan asri dari desa “Pengeling Pura” yang bermakna tempat suci untuk mengenang para leluhur.
                <br><br>Selain itu, bentuk bangunan setiap rumah yang seragam dan saling terhubung melalui lorong memiliki pesan bahwa masyarakat hidup berdampingan secara harmonis.',
                'desc_right'=>'Wisatawan dapat mempelajari aturan adat, tradisi unik, dan banyak acara ritual termasuk Galungan. Salah satu aturan adat yang berlaku adalah larangan bagi pria untuk poligami dan akan dikucilkan di sebuah tempat bernama Karang Memadu, jika melanggar.
                <br><br>Wisatawan dapat menginap di sejumlah penginapan yang ada sambil menikmati jajanan khas Bali bernama Sueg yang terbuat dari umbi.',
                'image'=>'Desa_Penglipuran_Bangli.jpg',
                
            ],

            [
                'slug' => 'desa-tigawasa',
                'title'=>'Desa Tigawasa',
                'sub_title'=>'Desa adat ini terletak di Kecamatan Banjar, Kabupaten Buleleng. (berada di ketinggian sekitar 500-700m).
                <br>Wisatawan akan melihat banyak perkebunan dan sawah asri sambil menikmati sejuknya udara di Kubu Alam (tempat bersinggah masyarakat yang melintasi jalur Desa Tigawasa dari arah Denpasar-Singaraja dan sebaliknya).',
                'desc_left'=>'Wisatawan dapat menjelajahi salah satu desa tua di Buleleng tersebut dan berinteraksi dengan masyarakat setempat sambil mempelajari budaya, tradisi, dan adat istiadat yang ada.
                <br><br>Salah satu tradisi unik pada desa ini adalah tidak adanya pembakaran mayat dalam Upacara Ngaben. Mayat dikubur dan dibungkus dengan menggunakan kain batik.',
                'desc_right'=>' Selain itu, wisatawan bisa menikmati kopi robusta yang dipetik langsung dari kebun para petani setempat sambil melihat pemandangan perbukitan dari gardu pandang yang terbuat dari bambu.
                <br><br>Wisatawan juga dapat membeli kerajinan anyaman bambu berupa sokasi dan bedeg.                ',
                'image'=>'Desa_Tigawasa_Buleleng.jpg',
                
            ],

            [
                'slug' => 'desa-tenganan',
                'title'=>'Rekomendasi Desa di Bali, Desa Tenganan',
                'sub_title'=>'Desa adat ini terletak di Kecamatan Manggis, Kabupaten Karangasem.
                <br>Untuk memasuki area desa ini, wisatawan bukan membeli karcis namun memberi sumbangan seikhlasnya.',
                'desc_left'=>'Wisatawan akan melihat lingkungan desa yang masih sangat terjaga, banyak sawah dan tanaman yang asri, serta kerbau milik warga yang bebas berkeliaran.
                <br><br>Selain itu, wisatawan bisa melihat bentuk rumah adat berderetan yang masih dipertahankan dan aturan adat "awig-awig" yang ada sejak abad ke-11 dan diperbarui pada 1842.',
                'desc_right'=>'Sembari wisatawan mempelajari sejarah, budaya, adat, dan menikmati keindahan rumah adat, wisatawan juga dapat berkunjung ke toko oleh-oleh yang menjual banyak kerajinan hasil Desa Tenganan.
                <br><br>Wisatawan juga dapat membeli kerajinan kain geringsing yang hanya diproduksi dengan tangan di desa ini. Waktu pembuatan yang lama dan warna yang berasal dari tumbuh-tumbuhan membuatnya menjadi buah tangan yang wajib dibawa pulang.',
                'image'=>'Desa_Tenganan_Karangasem.jpg',
                
            ],
        ]);
    }
}
