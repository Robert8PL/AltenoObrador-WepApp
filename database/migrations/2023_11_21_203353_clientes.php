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
            Schema::create('clientes',function (Blueprint $table){
                $table->id();
                $table->string('nombre', 50);
                $table->string('direccion', 70);
                $table->string('tel',10);
                $table->string('email',50)->nullable();
                $table->float('deuda');
                $table->boolean('estado');
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
