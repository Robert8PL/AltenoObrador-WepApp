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
        Schema::create('pagos', function(Blueprint $table){
            $table->id();
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->date('fecha_pago');
            $table->float('monto');
            $table->string('nota_pago',150);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
