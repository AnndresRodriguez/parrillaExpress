<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_compra')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->timestamps();
        
            $table->foreign('id_compra')->references('id')->on('compra');
            $table->foreign('id_producto')->references('id')->on('producto');
                    
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_producto');
    }
}
