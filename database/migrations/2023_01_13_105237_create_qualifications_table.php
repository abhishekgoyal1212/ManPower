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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id');
            $table->string('qualification_type')->nullable();
            $table->string('school')->nullable();
            $table->string('university')->nullable();
            $table->string('awarding')->nullable();
            $table->string('from_month')->nullable();
            $table->string('to_year')->nullable();
            $table->string('subject')->nullable();
            $table->text('other_degree_grade')->nullable();
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
        Schema::dropIfExists('table_qualifications');
    }
};
