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
            'title' => $this->faker->sentence,
            'tag' => 'tag-'.$name,
            'description' => $this->faker->text,
            'count' => random_int(1,8),
            'rating' => number_format(random_int(1,5), 2, '.', ''),
            'price' => $this->faker->randomElement([49.99, 89.99, 129.99, 189.99, 259.99]),
            'featured' => $this->faker->randomElement([true, false])
        ];
    }
}
