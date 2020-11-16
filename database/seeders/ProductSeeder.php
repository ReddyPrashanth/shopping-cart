<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\SubCategory;
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
        $products = Product::factory()->count(20)->create();
        $categories = SubCategory::select('id')->pluck('id')->all();
        $products->each(function($product) use ($categories){
            $product->subCategories()->attach($categories);
        });
        $categories = SubCategory::all();
        foreach($categories as $category){
            $products = Product::factory()->count(20)->create();
            $category->products()->attach($products);
        } 
    }
}
