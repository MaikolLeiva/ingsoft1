<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 255);

            $table->string('primerEstudiante',255)->nullable();
            $table->string('primerRut',255)->nullable();
            $table->string('primeraCarrera', 255)->nullable();

            $table->string('segundoEstudiante',255)->nullable();
            $table->string('segundoRut',255)->nullable();
            $table->string('segundaCarrera', 255)->nullable();

            $table->string('tercerEstudiante',255)->nullable();
            $table->string('tercerRut',255)->nullable();
            $table->string('terceraCarrera', 255)->nullable();

            $table->string('cuartoEstudiante',255)->nullable();
            $table->string('cuartoRut',255)->nullable();
            $table->string('cuartaCarrera', 255)->nullable();

            $table->string('primerProfesor',255);
            $table->string('rutPrimerProfesor',255);

            $table->string('segundoProfesor',255)->nullable();
            $table->string('rutSegundoProfesor',255)->nullable();

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('trabajos');
    }
}
