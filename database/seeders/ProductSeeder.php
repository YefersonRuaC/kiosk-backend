<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [ 
                'name' =>  "Simple Hamburger",
                'price' => 59.9,
                'image' => "burgers_01",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Chicken Hamburger",
                'price' => 59.9,
                'image' => "burgers_02",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Chicken and Chili Hamburger",
                'price' => 59.9,
                'image' => "burgers_03",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Cheese and Pickles Hamburger",
                'price' => 59.9,
                'image' => "burgers_04",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Quarter Pound Hamburger",
                'price' => 59.9,
                'image' => "burgers_05",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Double Cheese Hamburger",
                'price' => 69.9,
                'image' => "burgers_06",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Caramel Chocolate Coffee",
                'price' => 59.9,
                'image' => "cafe_01",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Large Cold Chocolate Coffee",
                'price' => 49.9,
                'image' => "cafe_02",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Large Cold Chocolate Latte",
                'price' => 54.9,
                'image' => "cafe_03",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Cup of coffe",
                'price' => 54.9,
                'image' => "cafe_04",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Large Cold Chocolate Milkshake",
                'price' => 54.9,
                'image' => "cafe_05",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Coffee cream",
                'price' => 39.9,
                'image' => "cafe_06",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Spicy Pizza with Double Cheese",
                'price' => 69.9,
                'image' => "pizzas_01",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Ham and Cheese Pizza",
                'price' => 69.9,
                'image' => "pizzas_02",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Double Cheese Pizza",
                'price' => 69.9,
                'image' => "pizzas_03",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Chorizo Pizza",
                'price' => 69.9,
                'image' => "pizzas_04",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Chicken Pizza",
                'price' => 69.9,
                'image' => "pizzas_05",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Hawaiian Pizza",
                'price' => 69.9,
                'image' => "pizzas_06",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Natural Water",
                'price' => 29.9,
                'image' => "drinks_01",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Soda Water",
                'price' => 29.9,
                'image' => "drinks_02",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Pepsi",
                'price' => 29.9,
                'image' => "drinks_03",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Coca Cola",
                'price' => 29.9,
                'image' => "drinks_04",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Orange Soda",
                'price' => 29.9,
                'image' => "drinks_05",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [ 
                'name' =>  "Mango Soda",
                'price' => 29.9,
                'image' => "drinks_06",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Chocolate Chip Ice Cream",
                'price' => 29.9,
                'image' => "ice_cream_01",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Vanilla Bean Ice Cream",
                'price' => 29.9,
                'image' => "ice_cream_02",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Strawberry Ice Cream",
                'price' => 29.9,
                'image' => "ice_cream_03",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Pistachio Ice Cream",
                'price' => 29.9,
                'image' => "ice_cream_04",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Neapolitan Ice Cream",
                'price' => 29.9,
                'image' => "ice_cream_05",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Woody's Roundup Toy",
                'price' => 29.9,
                'image' => "toys_01",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Buzz Lightyear Action Figure",
                'price' => 29.9,
                'image' => "toys_02",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Iron Man Armor",
                'price' => 29.9,
                'image' => "toys_03",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Thor's Hammer",
                'price' => 29.9,
                'image' => "toys_04",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Captain America Shield",
                'price' => 29.9,
                'image' => "toys_05",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "Jessie's Lasso Toy",
                'price' => 29.9,
                'image' => "toys_06",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        DB::table('products')->insert($data);
    }
}
