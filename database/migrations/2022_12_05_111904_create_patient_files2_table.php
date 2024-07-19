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
        Schema::table('patient_files', function (Blueprint $table) {
            $table->string('bp_level')->nullable();
            $table->string('infection')->nullable();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('blood_group')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->text('address')->nullable();
            $table->string('occupation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_files2');
    }
};
