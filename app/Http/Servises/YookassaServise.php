<?php

namespace App\Http\Servises;

use YooKassa\Client;
use Illuminate\Support\Str;

class YookassaServise
{
    protected $client;
    public function __construct()
    {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shopId'), config('services.yookassa.secretKey'));
        $this->client = $client;
    }
    public function createPayment(int $amount, string $description = 'Заказ на сайте'): array
    {
        $id = Str::uuid();
        $payment = $this->client->createPayment(
            array(
                'amount' => array(
                    'value' => $amount,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => 'http://localhost:150/basket/callback?id=' . $id,
                ),
                'capture' => true,
                'description' => $description,
            ),
            Str::uuid(),
        );
        return [
            $payment->id,
            $payment->confirmation->confirmation_url,
            $id,
        ];
    }
    public function getPaymentInfo(string $id){
        $payment = $this->client->getPaymentInfo($id);
        return $payment;
    }
}