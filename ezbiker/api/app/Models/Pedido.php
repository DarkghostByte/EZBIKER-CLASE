<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable=[
        'address',
        'code',
        'country',
        'state',
        'phone',
        'references',
        'status',
        'total',
        'id_user',
    ];
}
