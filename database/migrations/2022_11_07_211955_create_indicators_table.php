<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->id();
            $table->string('nombreIndicador');
            $table->string('codigoIndicador');
            $table->string('unidadMedidaIndicador');
            $table->double('valorIndicador');
            $table->date('fechaIndicador');
            $table->timestamp('tiempoIndicador')->nullable();
            $table->string('origenIndicador');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicators');
    }
}
