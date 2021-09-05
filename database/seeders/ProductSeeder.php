<?php

namespace Database\Seeders;
use Illuminate\Support\facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Samsung Mobile',
            'price'=>'20000',
            'description'=>'smartphone with 4gb ram',
            'category'=>'mobile',
            'gallery'=>'https://rukminim1.flixcart.com/image/416/416/klb78nk0/mobile/m/2/k/galaxy-f62-sm-e625fzggins-samsung-original-imagygxxse8gbaby.jpeg?q=70 '
            ],
            [
                'name'=>'Infinix Mobile',
                'price'=>'10000',
                'description'=>'smartphone with 3gb ram',
                'category'=>'mobile',
                'gallery'=>'https://rukminim1.flixcart.com/image/312/312/kkyc9zk0/mobile/b/f/h/smart-5-x688c-infinix-original-imagy6wk8amhrdrg.jpeg?q=70'
            ],
            [
                'name'=>'Oppo Mobile',
                'price'=>'25000',
                'description'=>'smartphone with 6gb ram & 5G',
                'category'=>'mobile',
               'gallery'=>'https://rukminim1.flixcart.com/image/312/312/kr2e3680/mobile/n/r/d/reno6-pro-5g-cph2249-oppo-original-imag4xpcr2mfh6zc.jpeg?q=70'
            ],
            [
                'name'=>'Vivo Mobile',
                'price'=>'15000',
                'description'=>'smartphone with 8gb ram',
                'category'=>'mobile',
                'gallery'=>'https://rukminim1.flixcart.com/image/312/312/kppt47k0/mobile/i/i/z/y73-v2059-vivo-original-imag3vdg3stazpjv.jpeg?q=70'
            ],
        ]);
    }
}
