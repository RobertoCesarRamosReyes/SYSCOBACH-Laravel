<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestados', function (Blueprint $table) {
            $table->integer('prestamo_id')->unsigned();
            $table->integer('libro_id')->unsigned();

            $table->foreign('prestamo_id')->references('id')->on('prestamos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestados');
    }
}
