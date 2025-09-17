<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 
        'date_order', 
        'final_amount', 
        'total_amount', 
        'discount_amount', 
        'voucher_code', 
        'order_code',
        'status',
        'notes',
        'cancel_reason',
        'detailed_address',
        'ward_name',
        'district_name',
        'province_name',
        'recipient_name',
        'recipient_phone',
        'recipient_email',
        'payment_method',
        'payment_status'
    ];
    protected $casts = [
        'status' => 'string',
        'payment_status' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
