<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientadmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientadmissions', function (Blueprint $table) {
            $table->id();
            $table->string('case_id')->nullable();
            $table->string('case_history')->nullable();
            $table->string('patient_id')->nullable();
            $table->string('reffered_by')->nullable();
            $table->string('hospital_id')->nullable();
            $table->string('doctor_id')->nullable();
            $table->string('seat_id')->nullable();
            $table->string('admitted_by')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('patientadmissions');
    }
}
