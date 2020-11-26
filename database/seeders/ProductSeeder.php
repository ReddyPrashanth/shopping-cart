<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Color;
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
        $sizes = Size::select('id')->pluck('id')->all();
        $colors = Color::select('id')->limit(10)->pluck('id')->all();
        $products->each(function($product) use ($categories, $sizes, $colors){
            $product->subCategories()->attach($categories);
            $product->sizes()->attach($sizes);
            $product->colors()->attach($colors);
        });
        $categories = SubCategory::all();
        foreach($categories as $category){
            $products = Product::factory()->count(20)->create();
            $category->products()->attach($products);
            $products->each(function($product) use ($sizes, $colors){
                $product->sizes()->attach($sizes);
                $product->colors()->attach($colors);
            });
        } 
    }
}
