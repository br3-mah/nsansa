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
        Schema::create('patient_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('activity_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->text('comments')->nullable();
            $table->string('diagnosis')->nullable();
            $table->integer('status_id')->nullable();
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
        Schema::dropIfExists('patient_activities');
    }
};
