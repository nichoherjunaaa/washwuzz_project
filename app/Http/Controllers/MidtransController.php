<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Notification;
use App\Models\Transaction;

class MidtransController extends Controller
{
    public function handleNotification(Request $request)
    {
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $notification = new Notification();

        $transaction = Transaction::where('order_id', $notification->order_id)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transactionStatus = $notification->transaction_status;
        $paymentType = $notification->payment_type;
        $fraudStatus = $notification->fraud_status;

        if ($transactionStatus == 'capture') {
            if ($paymentType == 'credit_card') {
                if ($fraudStatus == 'challenge') {
                    $transaction->payment_status = 'challenge';
                } else {
                    $transaction->payment_status = 'success';
                }
            }
        } elseif ($transactionStatus == 'settlement') {
            $transaction->payment_status = 'sukses';
        } elseif ($transactionStatus == 'pending') {
            $transaction->payment_status = 'menunggu';
        } elseif ($transactionStatus == 'deny') {
            $transaction->payment_status = 'gagal';
        } elseif ($transactionStatus == 'expire') {
            $transaction->payment_status = 'gagal';
        } elseif ($transactionStatus == 'cancel') {
            $transaction->payment_status = 'gagal';
        }

        $transaction->save();

        return response()->json(['message' => 'Notification handled'], 200);
    }
}
