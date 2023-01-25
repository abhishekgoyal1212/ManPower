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
        Schema::create('candidate_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id');
            $table->string('job_title')->nullable();
            $table->integer('salary')->nullable();
            $table->string('timing')->comment('1 = per_hours , 2 = per_annum') ->nullable();
            $table->text('work_location')->nullable();
            $table->string('job_type')->nullable();
            $table->string('sectors')->nullable();
            $table->string('employment_status')->comment('1 = full-time , 2 = part-time , 3 = temp/contract , 4 = Full-time_education ,  5 = Unemployed ') ->nullable();
            $table->string('notice_period')->nullable();
            $table->string('eligible_work')->comment('0 = No , 1 = Yes') ->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
