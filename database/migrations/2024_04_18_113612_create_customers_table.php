<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 255);
            $table->string('customer_email', 255);
            $table->string('customer_phone', 255)->nullable();
            $table->string('customer_country', 255)->nullable();
            $table->text('customer_address')->nullable();
            $table->string('customer_state', 255)->nullable();
            $table->string('customer_city', 255)->nullable();
            $table->string('customer_zip', 255)->nullable();
            $table->text('customer_password');
            $table->text('customer_token');
            $table->string('customer_status', 255)->default('Pending');
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
        Schema::dropIfExists('customers');
    }
};
