<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmortizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amortizacion', function (Blueprint $table) {
            $table->id();
            $table->string('id_prestamo');
            $table->integer('periodo');
            $table->double('capital', 8, 2);
            $table->double('interes', 8, 2);
            $table->double('saldo', 8, 2);
            $table->timestamps();

            $table->foreign('id_prestamo')->references('id')->on('prestamo')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amortizacion');
    }
}
