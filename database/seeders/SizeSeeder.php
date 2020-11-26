<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [
            ['name' => 'xs','label' => 'extra small'],
            ['name' => 'sm','label' => 'small'],
            ['name' => 'md','label' => 'medium'],
            ['name' => 'lg','label' => 'large'],
            ['name' => 'xl','label' => 'extra large'],
            ['name' => '2xl','label' => 'double extra large'],
        ];

        foreach ($sizes as $size) {
            Size::create(['name' => $size['name'], 'label' => $size['label']]);
        }
    }
}
