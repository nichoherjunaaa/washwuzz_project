<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $transactions = Transaction::with('service')->get();


            if (is_null($transactions)) {
                throw new \Exception('No transactions found');
            }

            if (request()->wantsJson()) {
                return response()->json([
                    'data' => $transactions,
                    'message' => 'Success'
                ], 200);
            }
            return view('pages.order', compact('transactions'));

        } catch (\Exception $e) {
            if (request()->wantsJson()) {
                return response()->json([
                    'message' => 'Something went wrong',
                    'error' => $e->getMessage()
                ], 500);
            }

            return redirect()->back()->withErrors('Something went wrong: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'service_id'=> 'required|exists:services,id',
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
