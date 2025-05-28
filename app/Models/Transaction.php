<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'service_id',
        'amount',
        'payment_status',
        'payment_method',
        'service_status',
        'quantity',
        'notes',
        'pickup_time',
        'address',
    ];

    protected $casts = [
        'pickup_time' => 'datetime',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
