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
        Schema::table('users', function (Blueprint $table) {
            $table->string('fname');
            $table->renameColumn('name', 'lname');
            $table->string('type')->nullable();
            $table->string('role')->nullable();
            $table->string('liecense_number')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('state')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alter_user');
    }
};
