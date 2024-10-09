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
        Schema::create('senior_managements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('name');
            $table->text('slug')->nullable();
            $table->text('designation');
            $table->text('ceo_message')->nullable();
            $table->text('detail')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('youtube')->nullable();
            $table->text('instagram')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('website')->nullable();
            $table->text('address')->nullable();
            $table->text('photo')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('category_id')->references('id')->on('management_categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senior_managements');
    }
};
