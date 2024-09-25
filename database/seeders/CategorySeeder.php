<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Burgers',
            'icon' => 'burger',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Coffe',
            'icon' => 'coffe',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Pizzas',
            'icon' => 'pizza',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Drinks',
            'icon' => 'drink',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Ice cream',
            'icon' => 'ice_cream',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Toys',
            'icon' => 'Toy',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);        
    }
}
