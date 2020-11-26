<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Comment;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $reviewId = Review::inRandomOrder()->first()->id;
        $userId = User::inRandomOrder()->first()->id;
        return [
            'description' => $this->faker->paragraph(5),
            'review_id' => $reviewId,
            'user_id' => $userId
        ];
    }
}
