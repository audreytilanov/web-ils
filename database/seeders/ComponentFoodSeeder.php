<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentFoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_food')->insert([
            [
                'title'=>'Yuk Intip Makanan Khas<br> Bali....',
                'desc'=>'',
                'image'=>'',
                'status'=>'header'
            ],

            [
                'title'=>'Ayam Betutu',
                'desc'=>'Kata "betutu" berasal dari kata "tunu" yang berarti bakar dan dirangkai dengan kata "be" yang berarti daging. Daging ayam dibalurkan bumbu khas Bali di seluruh permukaan tubuh, kemudian direbus atau langsung dibakar hingga menghasilkan aroma yang khas. Menurut tradisi Bali, ayam betutu biasanya disajikan pada saat upacara adat seperti odalan, otonan, maupun perkawinan.',
                'image'=>'Ayam_Betutu.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Sate Lilit',
                'desc'=>'Kata "Lilit" dalam bahasa Bali berarti "membungkus". Sate Lilit adalah sate yang terbuat dari daging ikan, ayam, sapi, atau kura-kura yang dicincang, kemudian dicampur dengan parutan kelapa, santan, jeruk nipis, bawang merah, dan merica. Tusuk sate lilit berbentuk datar dan lebar yang bertujuan agar daging cincang dapat melekat.',
                'image'=>'Satay_Lilit.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Srombotan',
                'desc'=>'Setelah membahas tentang daging, sekarang masuk ke sayuran. Srombotan adalah sayuran khas Kabupaten Klungkung, Bali, yang terbuat dari sayur buah botor muda atau kecipir, terong bulat, pare, tauge, kubis yang dimasak setengah matang.',
                'image'=>'Srombotan.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Lawar',
                'desc'=>'Bagaimana jika sayuran dicampur dengan daging? Lawar adalah campuran sayuran dan daging cincang yang dibumbui secara merata dengan sejumlah bumbu-bumbu dan kelapa. Makanan ini lazim disajikan dalam rumah tangga di Bali atau dijual secara luas di rumah-rumah makan.',
                'image'=>'Lawar.jpg',
                'status'=>'sub'
            ],

            [
                'title'=>'Nasi Campur Bali',
                'desc'=>'Bagaimana jika sate lilit dan lawar digabung menjadi satu hidangan ditambah nasi dan rasanya diselingi oleh campuran rempah-rempah khas Bali? Nasi campur Bali memakai tuna bakar, tahu goreng, mentimun, bayam, tempe, daging sapi, kari sayur, jagung, sambal di atas nasi.',
                'image'=>'Nasi_campur_bali.jfif',
                'status'=>'sub'
            ],

            [
                'title'=>'Laklak',
                'desc'=>'Laklak adalah panekuk kecil tradisional Bali dengan kelapa parut dan gula aren cair. Makanan ini terbuat dari tepung beras, air, santan, ekstrak daun suji, baking powder, garam, kelapa parut, dan gula merah.',
                'image'=>'Laklak.jpeg',
                'status'=>'sub'
            ],
        ]);
    }
}
