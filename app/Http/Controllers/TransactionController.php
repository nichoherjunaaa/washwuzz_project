<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Transaction;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Helpers\MidtransHelper;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {

            // dd($request->all());
            $userId = \Illuminate\Support\Facades\Auth::id();

            $query = Transaction::with('service')
                ->where('user_id', $userId);

            if ($request->filled('status')) {
                $query->where('service_status', $request->status);
            }

            if ($request->filled('search')) {
                $query->where('order_id', 'like', '%' . $request->search . '%');
            }

            $sortOrder = $request->get('sort') === 'oldest' ? 'asc' : 'desc';
            $query->orderBy('created_at', $sortOrder);

            $transactions = $query->paginate(3)->appends($request->query());

            return view('pages.order', compact('transactions'));

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    private function generateOrderId()
    {
        $prefix = 'ORD';
        $date = now()->format('Ymd'); 
        $random = strtoupper(Str::random(6));
        return $prefix . '-' . $date . '-' . $random;
    }

    public function checkout($id)
    {
        $service = Service::findOrFail($id);
        return view('pages.checkout', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id',
            'notes' => 'nullable|string',
            'pickup_time' => 'nullable|string',
            'quantity' => 'nullable|integer|min:0',
            'amount' => 'nullable|integer|min:0',
            'payment_status' => 'nullable|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'service_status' => 'nullable|string|max:255',
            'address' => 'required|string|max:1000',
        ]);

        try {
            $pickupTime = null;
            if (!empty($validated['pickup_time'])) {
                $parts = explode('-', $validated['pickup_time']);
                if (count($parts) > 0) {
                    $pickupTime = now()->setTimeFromTimeString(trim($parts[0]));
                }
            }

            Transaction::create([
                'order_id' => $this->generateOrderId(),
                'user_id' => auth()->id(),
                'service_id' => $validated['service_id'],
                'amount' => $validated['amount'] ?? 0,
                'payment_status' => $validated['payment_status'] ?? 'menunggu',
                'payment_method' => $validated['payment_method'] ?? null,
                'service_status' => $validated['service_status'] ?? 'menunggu',
                'quantity' => $validated['quantity'] ?? 0,
                'address' => $validated['address'],
                'notes' => $validated['notes'] ?? null,
                'pickup_time' => $pickupTime,
            ]);

            return redirect()->route('order')->with('success', 'Transaksi berhasil dibuat!');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withInput()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('pages.order_detail', compact('transaction'));
    }

    public function pay($id)
    {

        $transaction = Transaction::with('user')->findOrFail($id);
        if ($transaction->payment_status === 'success') {
            return redirect()->route('order')->with('info', 'Transaksi ini sudah dibayar.');
        }

        $snapToken = MidtransHelper::generateSnapToken($transaction);

        return view('pages.pay', compact('transaction', 'snapToken'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
