<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketEntradaInsumoTrazableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_entrada_insumo_trazable', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('insumo');
            $table->integer('lote');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('ticket');
            $table->foreign('cliente')->references('id_cliente')->on('lote_cliente');
            $table->foreign('insumo')->references('id_insumo')->on('lote_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_entrada_insumo_trazable');
    }
}
