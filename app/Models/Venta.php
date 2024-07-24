<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'metodo_de_pago',
        'fecha',
        'producto',
        'cantidad',
        'precio',
        'subtotal',
        'iva',
        'total',
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }
}
