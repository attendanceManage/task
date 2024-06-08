<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePage;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        HomePage::create([[
            'id'   =>1 , 
            'type' => "Slider",
            'title' =>"Slider" ,
            'order' => 1,
        ],
        [
            'id'   =>  2,
            'type' => "Hero Slider",
            'title' =>"Hero Slider" ,
            'order' => 2,
        ],
        [
            'id'   =>  3,
            'type' => "Product",
            'title' =>"Product",
            'order' => 3,
        ],
        [
            'id'   =>  4,
            'type' => "Customers Reviews",
            'title' =>"Customers Reviews",
            'order' => 4,
        ],
        [
            'id'   =>  5,
            'type' => "Frequently Questions",
            'title' =>"Frequently Questions",
            'order' => 5,
        ]

        ]);
    }
}
