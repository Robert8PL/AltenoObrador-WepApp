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
            $table->bigInteger('id_cliente',false,true);
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->date('fecha_pago');
            $table->float('monto');
            $table->string('nota_pago',150);
            $table->timestamps();
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
