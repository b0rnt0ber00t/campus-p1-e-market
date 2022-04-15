<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Snap extends Model
{
    use HasFactory;

    protected $fillable = ['status_code', 'gross_amount', 'transaction_status', 'transaction_time', 'va_numbers', 'transaction_id'];

    protected $hidden = ['va_numbers', 'transaction_id'];
}
