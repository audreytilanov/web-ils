<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentPembangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('component_pembangunans')->insert([
            [
                'slug'=> 'pembangunan-jalan-shortcut-singaraja',
                'title'=>'Pembangunan di Bali - Pembangunan Jalan Shortcut Singaraja-Mengwitani tetap Lanjut meski di Tengah Pandemi',
                'desc_left'=>'Bapak Gubernur, I Wayan Koster, berkomitmen menyelesaikan shortcut Singaraja-Mengwitani meskipun di tengah pandemi. Pembangunan infrastruktur yang dibiayai dari APBN sesuai rencana dan tidak ada dana yang dipotong. Menurutnya, pembangunan shortcut (SC) pada ruas batas Kota Singaraja-Mengwitani ini penting untuk menciptakan pemerataan pembangunan antara Bali Utara dan Selatan. <br><br>
                Latar belakang dibangunnya shortcut pada titik 7A, 7B dan 7C disebabkan karena kondisi jalan sebelumnya memiliki tikungan pendek dengan kelandaian lebih dari 10%, sehingga kecepatan kendaraan hanya mampu 20 km/jam. ',
                'desc_right'=>'Pemprov Bali mengerjakan Detail Engineering Design (DED) serta melakukan pembebasan lahan untuk titik 7A, 7B, 7C, 7D dan 7E serta dan titik 8 dengan luas 11,970 Ha dengan biaya pembebasan mencapai Rp83,7 miliar. Pada proyek ini juga akan dibangun rest area serta Anjung Pandang dan Monumen Ki Barak Panji Sakti sebagai ikonnya nanti. <br><br>
                Luas area taman dan parkir 2,158 meter persegi dan luas bangunan 180,3 meter persegi dengan perkiraan biaya mencapai Rp4,2 miliar. Anjung pandang bisa dijadikan sebagai destinasi pariwisata yang baru dan akan diintegrasikan dengan konsep rest area pada area sekitar Anjung Pandang, sehingga dapat meningkatkan perekonomian masyarakat sekitar sekaligus mendukung pemulihan sektor pariwisata Bali.',
                'tanggal'=>'Rabu (1/9/2021)',
                'sumber'=>'https://bali.bisnis.com',
                'image1'=>'pembangunan1.jpeg',
                'image2'=>'pembangunan2.jpeg'
            ],
        ]);
    }
}
