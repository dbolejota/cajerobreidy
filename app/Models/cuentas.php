<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuentas extends Model
{
    use HasFactory;

    protected $table = 'cuentas';

    protected $fillable = [
        'nombres',
        'numero_cuenta',
        'pin',
        'saldo',
    ];
}
