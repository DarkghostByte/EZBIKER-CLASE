<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table= "productos_pedidos";

    protected $fillable=[
        'id_pedido',
        'id_product',
        'cantidad',
        'precio',
    ];
}
