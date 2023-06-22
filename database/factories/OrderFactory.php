<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::get()->random()->id,
            'amount' => $this->faker->randomFloat(2, 1000, 10000),
            'status' => Status::get()->random()->id,
            'kassa_id' => $this->faker->uuid,
            'checked_id' => $this->faker->uuid
        ];
    }
}
