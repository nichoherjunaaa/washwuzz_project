<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Auth;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $userId = \Illuminate\Support\Facades\Auth::id();

            $transactions = Transaction::with('service')
                ->where('user_id', $userId)
                ->get();

            // Tidak perlu lempar exception, cukup kirimkan saja ke view
            return view('pages.order', compact('transactions'));

        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_id' => 'required|exists:services,id',
            'amount' => 'required|numeric',
            'payment_status' => 'required|string',
            'payment_method' => 'required|string',
            'service_status' => 'required|string',
            'quantity' => 'required|numeric'
        ]);

        try {
            if (empty($validated)) {
                throw new \Exception('Validation failed, no data provided');
            }

            $transaction = Transaction::create($validated);
            if (is_null($transaction)) {
                throw new \Exception('Transaction creation failed');
            }

            return response()->json($transaction, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create transaction',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
