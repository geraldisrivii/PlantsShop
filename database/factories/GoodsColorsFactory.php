<?php

namespace Database\Factories;

use App\Models\Good;
use App\Models\Color;
use App\Models\GoodsColors;
use Illuminate\Database\Eloquent\Factories\Factory;

class GoodsColorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = GoodsColors::class;

    public function definition()
    {
        return [
            'good_id' => Good::get()->random()->id,
            'color_id' => Color::get()->random()->id,
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
