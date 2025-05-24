<?php

namespace App\Helpers;

use Midtrans\Config;
use Midtrans\Snap;

class MidtransHelper
{
    public static function generateSnapToken($transaction)
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false; // set true untuk production
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $transaction->order_id,
                'gross_amount' => (int) $transaction->amount,
            ],
            'customer_details' => [
                'first_name' => $transaction->user->name,
                'email' => $transaction->user->email,
            ],
        ];

        return Snap::getSnapToken($params);
    }
}
