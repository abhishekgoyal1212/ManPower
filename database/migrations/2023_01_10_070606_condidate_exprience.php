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
        Schema::create('candidate_exprience_profile', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id');
            $table->string('job_title')->nullable();
            $table->string('company')->nullable();
            $table->string('from_month')->nullable();
            $table->string('from_year')->nullable();
            $table->string('from_to_month')->nullable();
            $table->string('from_to_year')->nullable();
            $table->text('content')->nullable();
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
