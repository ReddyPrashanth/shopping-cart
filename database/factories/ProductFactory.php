<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName;
        return [
            'name' => $name,
            'tag' => 'tag-'.$name,
            'description' => $this->faker->text,
            'featured' => $this->faker->randomElement([true, false])
        ];
    }
}
