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
            $table->bigInteger('id_cliente',false,true);
          
            $table->integer('nPedido', false, true);

            $table->bigInteger('idProd1',false,true);
            $table->bigInteger('idProd2',false,true);
            $table->bigInteger('idProd3',false,true);
            $table->bigInteger('idProd4',false,true);
            $table->bigInteger('idProd5',false,true);
            
            
            $table->float('total');
            $table->float('pago');
            $table->smallInteger('estado');
        
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('idProd1')->references('id')->on('productos');
            $table->foreign('idProd2')->references('id')->on('productos');
            $table->foreign('idProd3')->references('id')->on('productos');
            $table->foreign('idProd4')->references('id')->on('productos');
            $table->foreign('idProd5')->references('id')->on('productos');
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
