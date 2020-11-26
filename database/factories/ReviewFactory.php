<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $productId = Product::inRandomOrder()->first()->id;
        $userId = User::inRandomOrder()->first()->id;
        return [
            'title' => substr($this->faker->sentence, 0, 49),
            'description' => $this->faker->paragraph(5),
            'rating' => number_format(random_int(1,5), 2, '.', ''),
            'product_id' => $productId,
            'user_id' => $userId
        ];
    }
}
