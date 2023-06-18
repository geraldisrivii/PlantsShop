<?php

namespace Database\Factories;

use App\Models\Good;
use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'new_price' => $this->faker->randomFloat(2, 400, 4000),
        ];
    }
}
