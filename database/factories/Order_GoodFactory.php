<?php

namespace Database\Factories;

use App\Models\Good;
use App\Models\Order;
use App\Models\Order_Good;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_GoodFactory extends Factory
{
    protected $model = Order_Good::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'good_id' => Good::get()->random()->id,
            'order_id' => Order::get()->random()->id,
        ];
    }
}
