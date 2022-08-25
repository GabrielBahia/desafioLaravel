<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(5)->create();
        Stock::factory(3)->create();
        User::factory(3)->create();

        $this->call(UserSeeder::class);    
        $this->call(StockSeeder::class);
        
    }
}
