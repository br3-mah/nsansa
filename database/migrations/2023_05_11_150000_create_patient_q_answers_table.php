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
        Schema::create('patient_q_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('answer');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('question_id')->nullable();
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
        Schema::dropIfExists('patient_q_answers');
    }
};
