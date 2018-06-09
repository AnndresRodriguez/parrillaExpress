<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteparrillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clienteparrilla', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre', 255);
            $table->string('apellido', 255);
            $table->integer('edad');
            $table->string('sexo', 255);
            $table->string('cedula', 255);
            $table->date('fecha_nacimiento');
            $table->engine = 'InnoDB';  
            $table->charset = 'utf8';   
            $table->collation = 'utf8_unicode_ci';
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
        Schema::dropIfExists('clienteparrilla');
    }
}
