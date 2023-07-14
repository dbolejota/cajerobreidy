<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class idiomas extends Model
{
    use HasFactory;
    protected $table = 'idiomas';

    public function billetes()
    {
        return $this->hasOne(billetes::class);
    }
}
