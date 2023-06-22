<?php

namespace Database\Seeders;

use App\Models\Good;
use App\Models\Role;
use App\Models\User;
use App\Models\Color;
use App\Models\Order;
use App\Models\Sales;
use App\Models\Review;
use App\Models\Status;
use App\Models\Category;
use App\Models\BasketItem;
use App\Models\Order_Good;
use App\Models\GoodsColors;
use Illuminate\Database\Seeder;
use App\Models\OrderByCategories;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)->create();
        // roles
        Role::create([
            'name'=>'user',
        ]);
        Role::create([
            'name'=>'admin',
        ]);
        // users
        User::factory(10)->create();
        // sales
        Sales::factory(50)->create();
        // goods
        Good::factory(100)->create();
        // reviews
        Review::factory(200)->create();
        // statuses
        Status::create([
            'title'=>'created',
        ]);
        Status::create([
            'title'=>'approved',
        ]);
        Status::create([
            'title'=>'delivered',
        ]);
        Status::create([
            'title'=>'completed',
        ]);
        // orders
        Order::factory(50)->create();
        // orders_goods
        Order_Good::factory(100)->create();
        // colors
        Color::factory(20)->create();

        GoodsColors::factory(45)->create();

        OrderByCategories::create([
            'title'=> 'popularity',
        ]);
        OrderByCategories::create([
            'title'=> 'lowPrice',
        ]);
        OrderByCategories::create([
            'title'=> 'highPrice',
        ]);

        BasketItem::factory(10)->create();
    }
}
