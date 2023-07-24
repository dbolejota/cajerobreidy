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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_cuentas');
            $table->decimal('cantidad', 10, 2);
            $table->enum('tipo_transaccion', ['deposito', 'retiro']);
            $table->timestamp('fecha_transaccion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('id_cuentas')->references('id')->on('cuentas');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
