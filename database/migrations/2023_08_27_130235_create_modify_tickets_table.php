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
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('trans_amount')->nullable();
            $table->string('fee_amount')->nullable();
            $table->string('trans_rate')->nullable();
            $table->string('actual_amount')->nullable();
            $table->string('status')->nullable();
            $table->text('ref')->nullable();
            $table->text('msg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modify_tickets');
    }
};
