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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('role_page_id');
            $table->string('operation')->nullable();
            $table->integer('access_status');
            $table->timestamps();

            // Foreign keys
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('role_page_id')->references('id')->on('role_pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permissions');
    }
};
