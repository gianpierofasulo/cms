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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('blog_title', 255);
            $table->string('blog_slug', 255)->nullable();
            $table->text('blog_content');
            $table->text('blog_content_short');
            $table->string('blog_photo', 255);
            $table->string('seo_title', 255)->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
