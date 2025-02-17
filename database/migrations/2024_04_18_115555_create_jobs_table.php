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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('job_title');
            $table->text('job_slug')->nullable();
            $table->text('job_description_short');
            $table->text('job_responsibility');
            $table->text('job_education')->nullable();
            $table->text('job_experience')->nullable();
            $table->text('job_additional_requirement')->nullable();
            $table->text('job_benefit')->nullable();
            $table->text('job_deadline');
            $table->text('job_vacancy');
            $table->text('job_company_name')->nullable();
            $table->text('job_location');
            $table->text('job_type')->nullable();
            $table->text('job_salary');
            $table->integer('job_order')->default(0);
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('category_id')
                  ->references('id')->on('categories')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });
        
        Schema::dropIfExists('jobs');
    }
};
