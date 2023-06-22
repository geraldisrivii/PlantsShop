<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Color;
use App\Models\Review;
use App\Models\Category;
use App\Models\BasketItem;
use App\Models\GoodsColors;
use App\Http\classes\Filter;
use Illuminate\Http\Request;
use App\Models\OrderByCategories;
use Illuminate\Support\Facades\DB;

class GoodController extends Controller
{
    public function main(){
        $goods = Good::orderBy('amountBuys', 'desc')->paginate(3); 
        return view('pages.main', compact('goods'));
    }
    public function index()
    {
        $orderBy = request('orderBy');

        $pageValue = request('page');
        if ($pageValue == 0) {
            return redirect(route('goods.index') . '?page=1');
        }

        $filter = new Filter('App\Models\Good');
        $filter->setFilters([
            ['category_id', request('category_id'), 'match'],
            ['title', request('title'), 'like'],
        ]);
        $filter->setOrderBy($orderBy, OrderByCategories::class);
        $goods = $filter->run()->paginate(9);
        $salesGoods = Good::where('sales_id', '!=', 'NULL')->limit(3)->get();
        // categories

        $categories = Category::all();
        $orderByCategories = OrderByCategories::all();

        return view('pages.Good.index', compact('goods', 'salesGoods', 'categories', 'orderByCategories'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Good $good)
    {
        // same goods
        $reviews = $good->reviews()->join('users', 'users.id', '=', 'reviews.user_id')->limit(3)->get();

        $sameGoods = Good::where('category_id', $good->category_id)->where('id', '!=', $good->id)->limit(3)->get();

        return view('pages.Good.show', compact('good', 'sameGoods', 'reviews'));
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function basket()
    {
        $basketItems = BasketItem::all();
        return view('pages.Good.basket', compact('basketItems'));
    }
}