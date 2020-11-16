<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\MainCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array('name' => 'Electronics', 'tag' => 'electronics'),
            array('name' => 'Phones', 'tag' => 'mobile-phones'),
            array('name' => 'Mens Clothing', 'tag' => 'mens-clothing'),
            array('name' => 'Womens Clothing', 'tag' => 'womens-clothing'),
            array('name' => 'Shoes', 'tag' => 'shoes'),
            array('name' => 'TVs & Appliances', 'tag' => 'tvs'),
            array('name' => 'Housing & Furniture', 'tag' => 'housing-furniture')
        );
            foreach($categories as $cat){
                $category = new Category();
                $category->name = $cat['name'];
                $category->tag = $cat['tag'];
                $category->save();
            }
    }
}
