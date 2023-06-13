<?php

namespace Database\Seeders;

use App\Models\Good;
use App\Models\Order;
use App\Models\Order_Good;
use App\Models\Review;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // roles
        Role::create([
            'name'=>'user',
        ]);
        Role::create([
            'name'=>'admin',
        ]);
        // users
        User::factory(10)->create();
        // goods
        Good::factory(10)->create();
        // reviews
        Review::factory(10)->create();
        // orders
        Order::factory(10)->create();
        // orders_goods
        Order_Good::factory(10)->create();
    }
}
