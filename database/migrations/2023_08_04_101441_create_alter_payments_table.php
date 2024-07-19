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
        Schema::table('payments', function (Blueprint $table) {
            $table->string("amount")->nullable();
            $table->string("companyName")->nullable();
            $table->string("firstName")->nullable();
            $table->string("lastName")->nullable();
            $table->string("customerType")->nullable();
            $table->string("email")->nullable();
            $table->string("expiryDate")->nullable();
            $table->string("mobile")->nullable();
            $table->string("responseMethod")->nullable();
            $table->string("sourceInstitution")->nullable();
            $table->string("paymentDescription")->nullable();
            $table->string("transaction_status")->nullable();
            
            $table->string("paymentType")->nullable();
            $table->string("paymentReference")->nullable();
            $table->string("redirectUrl")->nullable();  
            $table->string("systemId")->nullable();
            $table->string("password")->nullable();
            $table->string("tpin")->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alter_payments');
    }
};
