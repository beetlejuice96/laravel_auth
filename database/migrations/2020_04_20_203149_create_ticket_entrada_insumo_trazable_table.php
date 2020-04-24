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
            $table->foreignId('insumo_t_id')->constrained('inventario_insumo_trazable');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('ticket');
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
