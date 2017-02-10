<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            // Nombre
            $table->string('first_name');
            // Nombre intermedio
            $table->string('first_lastname');
            // Apellido paterno
            $table->string('second_lastname');
            // Código de control UDG
            $table->string('controll_code')->unique()->nullable();
            // Estado civil
            $table->enum('civil_state', ['Soltero', 'Casado', 'Divorciado', 'Unión libre', 'Viudo'])->nullable();
            // Genero
            $table->enum('gender', ['Masculino', 'Femenino'])->nullable();
            // Fecha de nacimiento
            $table->date('birth_date')->nullable();
            // Dependientes económicos
            $table->string('dependents')->nullable();
            // Numero de hijos
            $table->string('child_number')->nullable();
            // Lugar de nacimiento
            $table->string('birth_place')->nullable();
            // Stamps
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
        Schema::dropIfExists('patients');
    }
}
