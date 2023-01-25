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
        Schema::create('all_update_profils', function (Blueprint $table) {
            $table->id();
            $table->integer('jobseeker_id');
            $table->string('skills')->nullable();
            $table->string('languages')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('personal_statement')->nullable();
            $table->string('car_driving_license')->nullable();
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
