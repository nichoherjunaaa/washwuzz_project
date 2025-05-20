<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
        'amount',
        'payment_status',
        'payment_method',
        'service_status',
        'quantity',
        'notes',
        'pickup_time'
    ];

    // app/Models/Transaction.php
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
