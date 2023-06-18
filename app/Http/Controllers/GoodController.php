<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Color;
use App\Models\GoodsColors;
use App\Http\classes\Filter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoodController extends Controller
{
    public function salesView()
    {

    }
    public function index()
    {
        $orderBy = request('orderBy');
        
        $pageValue = request('page');
        if ($pageValue == 0) {
            return redirect(route('goods.index') . '?page=1');
        }

        $filter = new Filter('goods');
        $filter->setFilters([
            ['category_id', request('category_id')],
            ['title', request('title')],
        ]);
        $filter->setOrderBy($orderBy);
        $goods = $filter->run()->orderBy('id', $orderBy)->paginate(9);
        return view('pages.Good.index', compact('goods'));
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

        $sameGoods = DB::table('goods')->where('category_id', $good->category_id)->where('id', '!=', $good->id)->limit(3)->get();

        $goodColors = GoodsColors::all()->where('good_id', $good->id);
        foreach ($goodColors as $goodColor) {
            $goodColor->colorObject = Color::all()->where('id', $goodColor->color_id)->first();
            unset($goodColor['created_at']);
            unset($goodColor['updated_at']);
        }
        return view('pages.Good.show', compact('good', 'goodColors', 'sameGoods', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}