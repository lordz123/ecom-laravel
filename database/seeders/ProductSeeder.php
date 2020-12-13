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
            'name' => 'LG mobile',
            'price' => '1000',
            'description'=>'smart phone with 4gb ram',
            'category' => 'mobile',
            'gallery' => 'https://scx2.b-cdn.net/gfx/news/hires/2019/1000forasmar.jpg'
        ],
        [
            'name' => 'cubol x9',
            'price' => '500',
            'description'=>'smart phone with 4gb ram g',
            'category' => 'mobile',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeZkogXe1NDyJl4Y9k7ZNbhSFBvOJZom1csw&usqp=CAU'
        ],
        [
            'name' => 'samsung',
            'price' => '30',
            'description'=>'smart phone with 4gb ram v',
            'category' => 'mobile',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzOnwiCO26a7jy6opcLrfws1Y6bobvBXmq6w&usqp=CAU'
        ],
        [
            'name' => 'Le',
            'price' => '20',
            'description'=>'smart phone with 4gb ram x',
            'category' => 'mobile',
            'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNPw-k9VTN9WwyJ-9_zN6R7OlrcjA7vn0K-g&usqp=CAU'
        ]);
    }
}
