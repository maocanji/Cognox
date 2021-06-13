<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCuestasDescripcion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_descripcion', function (Blueprint $table) {
            $table->increments('id_cuenta_descripcion');
            $table->string('retiro')->nullable();
            $table->string('deposito')->nullable();
            $table->timestamps();
        });

        Schema::table('cuenta_descripcion', function (Blueprint $table) {
            $table->integer('id_cuenta')->unsigned();
            $table->foreign('id_cuenta')->references('id_cuenta')->on('cuenta')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta_descripcion');
    }
}
