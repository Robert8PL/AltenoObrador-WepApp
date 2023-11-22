<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function(Blueprint $table){

            $table->id();
            $table->foreign('idCliente')->references('id')->on('clientes');
            $table->integer('nPedido', false, true);
            $table->foreign('idProd1')->references('id')->on('productos');
            $table->foreign('idProd2')->references('id')->on('productos');
            $table->foreign('idProd3')->references('id')->on('productos');
            $table->foreign('idProd4')->references('id')->on('productos');
            $table->foreign('idProd5')->references('id')->on('productos');
            $table->float('total');
            $table->float('pago');
            $table->smallInteger('estado');
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
