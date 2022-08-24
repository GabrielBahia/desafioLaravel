<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Stock;
use App\Models\ProductStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stock = Stock::create();
        $product = Product::inRandomOrder()->limit(2)->get();
        $stock->products()->sync([$product[0]->id, $product[1]->id]);

        ProductStock::where('product_id', $product[0]->id)->where('stock_id', $stock->id)->update(['quantidade_product' => rand(1,10)]);
        ProductStock::where('product_id', $product[1]->id)->where('stock_id', $stock->id)->update(['quantidade_product' => rand(1,10)]);

        $qtd1 = ProductStock::where('product_id', $product[0]->id)->where('stock_id', $stock->id)->first()->quantidade_product;
        $qtd2 = ProductStock::where('product_id', $product[1]->id)->where('stock_id', $stock->id)->first()->quantidade_product;
        $stock->quantidade = $qtd1 + $qtd2;
        $stock->save();
    }
}
