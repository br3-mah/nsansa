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
        Schema::create('session_notes', function (Blueprint $table) {
            $table->id();
            $table->longText('notes');
            $table->unsignedInteger('chat_id')->nullable();
            $table->unsignedInteger('async_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('session_notes');
    }
};
