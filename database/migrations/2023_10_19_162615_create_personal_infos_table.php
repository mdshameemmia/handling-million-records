<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->string('father_name')->nullable();
            $table->bigInteger('father_nid')->nullable();
            $table->string('father_mobile')->nullable();
            $table->string('mother_name')->nullable();
            $table->bigInteger('mother_nid')->nullable();
            $table->string('mother_mobile')->nullable();
            $table->string('guardian_name')->nullable();
            $table->bigInteger('guardian_nid')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('email')->nullable();
            $table->string('education')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->text('yourself')->nullable();
            $table->text('why_interest_to_join')->nullable();
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
        Schema::dropIfExists('personal_infos');
    }
}
