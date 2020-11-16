<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategories = array(
            array(
                ['name' => 'Desktops', 'tag' => 'desktops'],
                ['name' => 'Laptops', 'tag' => 'laptops'],
                ['name' => 'Play Station', 'tag' => 'play-station'],
                ['name' => 'XBox One', 'tag' => 'xbox'],
                ['name' => 'Speakers', 'tag' => 'speakers'],
                ['name' => 'Keyboard', 'tag' => 'keyboard'],
                ['name' => 'Mouse', 'tag' => 'mouse'],
            ),
            array(
                ['name' => 'Smart Phones', 'tag' => 'smart-phones'],
                ['name' => 'Apple Phones', 'tag' => 'iphone'],
                ['name' => 'Mobile Speakers', 'tag' => 'mobile-speakers'],
                ['name' => 'Head Phones', 'tag' => 'head-phones'],
                ['name' => 'Ear Phones', 'tag' => 'ear-phones'],
                ['name' => 'Mobile Accessories', 'tag' => 'mobile-accessories'],
                ['name' => 'Phone Cases', 'tag' => 'phone-cases']
            ),
            array(
                ['name' => 'Jeans', 'tag' => 'jeans'],
                ['name' => 'Shirts', 'tag' => 'shirts'],
                ['name' => 'T-Shirts', 'tag' => 'tshirts'],
                ['name' => 'Trousers', 'tag' => 'trousers'],
                ['name' => 'Sweatshirts', 'tag' => 'sweatshirts'],
                ['name' => 'Joggers', 'tag' => 'joggers'],
                ['name' => 'Shorts', 'tag' => 'shorts'],
                ['name' => 'Track Pants', 'tag' => 'track-pants']
            ),
            array(
                ['name' => 'Jeans', 'tag' => 'jeans'],
                ['name' => 'Shirts', 'tag' => 'shirts'],
                ['name' => 'T-Shirts', 'tag' => 'tshirts'],
                ['name' => 'Jeggings', 'tag' => 'jeggings'],
                ['name' => 'Sweatshirts', 'tag' => 'sweatshirts'],
                ['name' => 'Trousers & Capris', 'tag' => 'trousers-capris'],
                ['name' => 'Panties', 'tag' => 'panties'],
                ['name' => 'Night Dresses', 'tag' => 'night-dresses']
            ),
            array(
                ['name' => 'Casual Shoes', 'tag' => 'casual-shoes'],
                ['name' => 'Sports Shoes', 'tag' => 'sports-shoes'],
                ['name' => 'Running Shoes', 'tag' => 'running-shoes'],
                ['name' => 'Workout Shoes', 'tag' => 'workout-shoes'],
                ['name' => 'Flats', 'tag' => 'flats'],
                ['name' => 'Socks', 'tag' => 'socks'],
                ['name' => 'Formal Shoes', 'tag' => 'formal-shoes'],
                ['name' => 'Boots', 'tag' => 'boots']
            ),
            array(
                ['name' => 'Smart TVs', 'tag' => 'smart-tvs'],
                ['name' => 'Android TVs', 'tag' => 'android-tvs'],
                ['name' => 'Refrigerators', 'tag' => 'refrigerators'],
                ['name' => 'Washing Machines', 'tag' => 'washing-machines'],
                ['name' => 'Air Conditioners', 'tag' => 'air-conditioners'],
                ['name' => 'TV Speakers', 'tag' => 'tv-speakers'],
                ['name' => 'Microwave Owens', 'tag' => 'microwave-owens'],
                ['name' => 'Dish Washers', 'tag' => 'dish-washers']
            ),
            array(
                ['name' => 'Sofa', 'tag' => 'sofa'],
                ['name' => 'Beds & Matresses', 'tag' => 'beds-matresses'],
                ['name' => 'TV Units', 'tag' => 'tv-units'],
                ['name' => 'Jeggings', 'tag' => 'jeggings'],
                ['name' => 'Wardrobes', 'tag' => 'wardrobes'],
                ['name' => 'Dining Tables', 'tag' => 'dining-tables'],
                ['name' => 'Coffee Tables', 'tag' => 'coffee-tables'],
                ['name' => 'Kotchen Appliances', 'tag' => 'kitchen-appliances']
            )
        );

        $categories = Category::all();
        foreach($categories as $key => $category){
            $subcategories = $subCategories[$key];
            foreach($subcategories as $subcategory){
                $sCat = new SubCategory();
                $sCat->name = $subcategory['name'];
                $sCat->tag = $subcategory['tag'];
                $sCat->category_id = $category->id;
                $sCat->save();
            }
        }
    }
}
