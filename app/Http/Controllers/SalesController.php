<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $pageValue = request('page');
        if ($pageValue == 0) {
            return redirect(route('sales.index') . '?page=1');
        }
        $salesGoods = Good::where('sales_id', '!=', 'NULL')->paginate(9);
        return view('pages.Good.sales', compact('salesGoods'));
    }
}
