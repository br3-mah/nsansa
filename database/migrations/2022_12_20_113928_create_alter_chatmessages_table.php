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
        Schema::table('chat_messages', function (Blueprint $table) {
            // zero is received
            $table->integer('status_received')->default(0);
            $table->integer('viewable')->default(1);
            $table->string('file')->nullable();
            $table->unsignedInteger('appointment_id')->nullable();
            $table->unsignedInteger('activity_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alter_chatmessages');
    }
};
