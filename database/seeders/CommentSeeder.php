<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Review;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = Review::select('id')->limit(1000)->get();
        foreach($reviews as $review){
            Comment::factory()->count(3)->create(['review_id' => $review->id]);
        }
    }
}
