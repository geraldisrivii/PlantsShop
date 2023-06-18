<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Good;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodFactory extends Factory
{
    protected $model = Good::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->randomFloat(2, 500, 3000),
            'image'=>$this->faker->imageUrl(),
            'category_id'=>Category::get()->random()->id,
        ];
    }
}
