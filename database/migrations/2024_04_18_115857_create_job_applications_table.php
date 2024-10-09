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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->text('applicant_first_name');
            $table->text('applicant_last_name');
            $table->text('applicant_email');
            $table->text('applicant_phone');
            $table->text('applicant_country');
            $table->text('applicant_state');
            $table->text('applicant_street');
            $table->text('applicant_city');
            $table->text('applicant_zip_code');
            $table->text('applicant_expected_salary');
            $table->text('applicant_cover_letter');
            $table->text('applicant_cv');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('job_id')
                  ->references('id')->on('jobs')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_applications', function (Blueprint $table) {
            $table->dropForeign(['job_id']);
        });
        
        Schema::dropIfExists('job_applications');
    }
};
