<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Midtrans\Notification;
use App\Models\Transaction;

class MidtransController extends Controller
{
    public function handleNotification(Request $request)
    {
        // Inisialisasi konfigurasi Midtrans
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false; // Sesuaikan dengan environment

        $notification = new Notification();

        $transaction = Transaction::where('order_id', $notification->order_id)->first();

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        // Status dari Midtrans
        $transactionStatus = $notification->transaction_status;
        $paymentType = $notification->payment_type;
        $fraudStatus = $notification->fraud_status;

        // Update berdasarkan status
        if ($transactionStatus == 'capture') {
            if ($paymentType == 'credit_card') {
                if ($fraudStatus == 'challenge') {
                    $transaction->payment_status = 'challenge';
                } else {
                    $transaction->payment_status = 'success';
                }
            }
        } elseif ($transactionStatus == 'settlement') {
            $transaction->payment_status = 'success';
        } elseif ($transactionStatus == 'pending') {
            $transaction->payment_status = 'pending';
        } elseif ($transactionStatus == 'deny') {
            $transaction->payment_status = 'denied';
        } elseif ($transactionStatus == 'expire') {
            $transaction->payment_status = 'expired';
        } elseif ($transactionStatus == 'cancel') {
            $transaction->payment_status = 'canceled';
        }

        $transaction->save();

        return response()->json(['message' => 'Notification handled'], 200);
    }
}
