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
        Schema::create('session_usages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('time')->nullable();
            $table->integer('rating')->nullable();
            $table->unsignedInteger('chat_id')->nullable();
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('counselor_id')->nullable();
            $table->unsignedInteger('package_id')->nullable();
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
        Schema::dropIfExists('session_usages');
    }
};
