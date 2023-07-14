<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transacciones extends Model
{
    use HasFactory;

    protected $table = 'transacciones';
    
    protected $fillable = [
        'id_cuentas',
        'cantidad',
        'tipo_transaccion',
        'fecha_transaccion'
    ];
    
    public function cuentas()
    {
        return $this->belongsTo(cuentas::class, 'id_cuentas');
    }
}
