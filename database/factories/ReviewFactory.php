<?php

namespace Database\Factories;

use App\Models\Good;
use App\Models\User;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'body'=>$this->faker->paragraph(),
            'user_id'=>User::get()->random()->id,
            'good_id'=>Good::get()->random()->id
        ];
    }
}
