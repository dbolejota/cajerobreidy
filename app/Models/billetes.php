<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billetes extends Model
{
    use HasFactory;
    protected $table = 'billetes';

    public function idiomas()
    {
        return $this->belongsTo(idiomas::class);
    }
}
