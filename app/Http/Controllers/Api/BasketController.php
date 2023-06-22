<?php

namespace App\Http\Controllers\Api;

use App\Models\BasketItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasketController extends Controller
{
    public function amountIncrement($id)
    {
        $basketItem = BasketItem::find($id);
        $basketItem->amount += request('amount');
        $basketItem->save();
        return response()->json(
            [
                'status' => 'ok',
                'object' => $basketItem
            ]
        );
    }
    public function amountDecrement($id)
    {
        $basketItem = BasketItem::find($id);
        $basketItem->amount -= request('amount');
        $basketItem->save();
        return response()->json(
            [
                'status' => 'ok',
                'object' => $basketItem
            ]
        );
    }
    public function destroy($id)
    {
        $basketItem = BasketItem::find($id);
        $basketItem->delete();
        return response()->json(
            [
                'status' => 'ok',
                'object' => $basketItem
            ]
        );
    }
}