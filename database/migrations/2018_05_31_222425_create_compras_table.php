<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('compra', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 255);
            $table->date('fecha_compra');
            $table->integer('id_cliente')->unsigned();
            $table->timestamps();
            $table->foreign('id_cliente')->references('id')->on('clienteparrilla');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra');
    }
}
