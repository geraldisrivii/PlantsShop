<?php

namespace Database\Factories;

use App\Models\Good;
use App\Models\Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class BasketItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $goodIds = [];
        $goodId = Good::get()->random()->id;
        while (true) {
            if(in_array($goodId, $goodIds) == false){
                $goodIds[] = $goodId;
                break;
            }
            $goodId = Good::get()->random()->id;
        }
        return [
            'good_id' => $goodId,
            'color_id' => Color::get()->random()->id,
            'amount' => $this->faker->numberBetween(1, 10),
        ];
    }
}
