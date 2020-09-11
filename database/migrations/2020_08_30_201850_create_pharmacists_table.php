<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('registration_number');
            $table->string('rank')->nullable();
            $table->string('category')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('department')->nullable();
            $table->string('pharmacy_id')->nullable();
            $table->string('posting')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('profile_photo')->nullable();
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
        Schema::dropIfExists('pharmacists');
    }
}
