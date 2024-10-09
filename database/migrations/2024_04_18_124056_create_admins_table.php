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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 191)->unique();
            $table->string('password', 100);
            $table->text('token');
            $table->text('photo');
            $table->unsignedBigInteger('role_id');
            $table->boolean('two_factor')->default(0)->nullable();
            $table->string('two_factor_code')->nullable();
            $table->datetime('two_factor_expires_at')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
