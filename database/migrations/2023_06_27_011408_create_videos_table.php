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
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('patient_id')->nullable();
            $table->unsignedInteger('appointment_id')->nullable();
            $table->unsignedInteger('chat_id')->nullable();
            $table->unsignedInteger('note_id')->nullable();
            $table->text('description')->nullable();            
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
        Schema::dropIfExists('videos');
    }
};
