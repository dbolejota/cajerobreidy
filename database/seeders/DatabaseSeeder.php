<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\billetes;
use App\Models\cuentas;
use App\Models\idiomas;
use App\Models\transacciones;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        billetes::factory()->times(8)->create();
        cuentas::factory()->times(19)->create();
        idiomas::factory()->times(17)->create();
        transacciones::factory()->times(30)->create();
    }
}
