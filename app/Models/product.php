<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'id_type',
        'id_size',
        'price_buy',
        'price_sell',
        'date_buy',
        'stock',
    ];
}
