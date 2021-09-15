<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_date',
        'departure_location',
        'arrival_date',
        'arrival_location',
        'order_info',
    ];
}
