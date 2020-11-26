<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::select('id')->get();
        foreach($products as $product){
            Review::factory()->count(40)->create(['product_id' => $product->id]);
        }   
    }
}
