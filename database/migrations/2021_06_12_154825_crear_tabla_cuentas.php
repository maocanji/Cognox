<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta', function (Blueprint $table) {
            $table->increments('id_cuenta');
            $table->string('numero_cuenta');
            $table->string('saldo_cuenta');
//            $table->integer('id_users')->unsigned();
            $table->timestamps();
        });

        Schema::table('cuenta', function (Blueprint $table) {
            $table->integer('id_users')->unsigned();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenta');
    }
}
