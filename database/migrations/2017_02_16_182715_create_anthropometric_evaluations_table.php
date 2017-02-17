<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnthropometricEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anthropometric_evaluations', function (Blueprint $table) {
            # Is this really the case where we need to do database-level math?
            # Otherwise they should be done by front-end, and stored as strings.
            $table->increments('id');
            $table->string('size');
            $table->string('current_weight');
            $table->string('imc');
            $table->string('obesity_grade');
            $table->string('hip_circumference');
            $table->boolean('waist_danger');
            $table->string('waist_circumference');
            $table->string('ideal_weight');
            $table->string('habitual_weight');
            $table->string('desnutrition_grade');
            $table->string('hand_circumference');
            $table->string('icc');
            $table->string('mass_distribution');
            $table->string('complexity');
            $table->string('cmb');
            $table->string('pcm');
            $table->string('pct');
            $table->string('pcse');
            $table->string('pcsi');
            $table->string('grease_mass');
            $table->string('grease%');
            $table->string('GM');
            $table->string('total_water');
            $table->boolean('is_active');
            $table->string('exercise_intensity')->nullable();
            $table->boolean('does_exercise');
            $table->string('exercise_type')->nullable();
            $table->string('exercise_frecuency')->nullable();
            $table->string('exercise_duration')->nullable();
            // Foreign key
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('anthropometric_evaluations');
    }
}
