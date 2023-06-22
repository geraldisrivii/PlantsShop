<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\BasketItem;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Servises\YookassaServise;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create(OrderRequest $request)
    {
    }

    public function store(OrderRequest $request)
    {
        $clientServise = new YookassaServise();
        // $data = $request->validated();
        $data = $request->validated();
        [$id, $url, $checkedID] = $clientServise->createPayment((int) $data['amount']);
        $data['kassa_id'] = $id;
        $data['checked_id'] = $checkedID;

        Order::create($data);
        // $basketItems = BasketItem::all();
        // $basketItems->each(function ($item) {
        //     $item->delete();
        // });

        return redirect($url);
    }
    public function callback()
    {
        $callbackId = request('id');
        $user_id = session('user')->id;
        $user = User::find($user_id);
        $orders = $user->orders()->get();
        $currentOrder = null;
        foreach ($orders as $key => $value) {
            if ($value->checked_id == $callbackId) {
                $currentOrder = $value;
                break;
            }
        }
        if ($currentOrder == null) {
            return redirect()->route('main');
        }
        $clientServise = new YookassaServise();
        $kassa_id = $currentOrder->kassa_id;
        $paymentInfo = $clientServise->getPaymentInfo($kassa_id);
        if($paymentInfo->status == 'succeeded'){
            $currentOrder->status = 2;
            $currentOrder->save();
        }
        return redirect()->route('basket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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