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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('location');
            $table->text('level')->nullable();
            $table->text('telephone')->nullable();
            $table->text('manager')->nullable();
            $table->text('photo');
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->text('detail')->nullable();
            $table->text('status')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
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
        Schema::dropIfExists('branches');
    }
};
