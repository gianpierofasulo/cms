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
        Schema::create('page_about_items', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('about_us_photo')->nullable();
            $table->string('vision_photo')->nullable();
            $table->string('mession_photo')->nullable();
            $table->text('detail')->nullable();
            $table->text('vision')->nullable();
            $table->text('mession')->nullable();
            $table->text('objective')->nullable();
            $table->text('core_value')->nullable();
            $table->text('status');
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
        Schema::dropIfExists('page_about_items');
    }
};
