<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use Illuminate\Http\Request;
use App\Http\Requests\BasketRequest;

class BasketController extends Controller
{
    public function index()
    {
        $basketItems = BasketItem::all();
        return view('pages.Good.basket', compact('basketItems'));
    }
    public function store(BasketRequest $request)
    {
        $data = $request->validated();
        BasketItem::create($data);
        return redirect()->route('basket.index');
    }
}