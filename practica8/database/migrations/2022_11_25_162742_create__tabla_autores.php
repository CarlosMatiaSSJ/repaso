<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tabla_autores', function (Blueprint $table) {
            $table->increments('idAutor');
            $table->string('nombreAutor');   
            $table->string('fechaNacimientoAutor');
            $table->string('librosAutor');
    });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tabla_autores');
    }
};
