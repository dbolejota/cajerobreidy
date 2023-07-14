<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string('nombres');
            $table->string('numero_cuenta', 16)->unique();
            $table->string('pin', 4);
            $table->decimal('saldo', 10, 2);
            $table->timestamps(); //guarda la fecha de creacion y modifiicacion//
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
