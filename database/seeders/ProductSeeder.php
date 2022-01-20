<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Mi4SE',
                'price'=>'300',
                'category'=>'Tv',
                'description'=>'A beautifull 4K Tv',
                'gallery'=>'https://www.powerplanetonline.com/cdnassets/xiaomi_mi_tv_4s_v57r_43_4k_ultra_hd_smart_tv_android_os_led_01_l.jpg',
            ],
            [
                'name'=>'XboxSerieX',
                'price'=>'599',
                'category'=>'GameConsole',
                'description'=>'The NextGen console',
                'gallery'=>'https://compass-ssl.xbox.com/assets/b9/0a/b90ad58f-9950-44a7-87fa-1ee8f0b6a90e.jpg?n=XSX_Page-Hero-0_768x792.jpg',
            ],
            [
                'name'=>'Ps5',
                'price'=>'699',
                'category'=>'GameConsole',
                'description'=>'The Best NextGen Console',
                'gallery'=>'https://i.ytimg.com/vi/9v7Gd4hablQ/maxresdefault.jpg',
            ],
            [
                'name'=>'Iphone13',
                'price'=>'1000',
                'category'=>'Mobile',
                'description'=>'The best smartphone',
                'gallery'=>'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-13-pro-01.jpg',
            ]
        ]);
    }
}
