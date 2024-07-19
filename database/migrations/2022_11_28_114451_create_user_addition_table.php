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
    // 0 = "Busy"
    // 1 = "Ready for more work"
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('patient_limit')->default(2);
            $table->integer('work_status')->default(1); 
            $table->float('hourly_charge', 9, 2)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addition');
    }
};
