<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finance_cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('age');
            $table->string('select_address');
            $table->string('address');
            $table->string('gender');
            $table->string('skills');
            $table->string('company_name')->nullable();
            $table->string('time_duration')->nullable();
            $table->string('post_name')->nullable();
            $table->string('email');
            $table->string('select_post');
            $table->string('ssc_name');
            $table->string('ssc_gpa');
            $table->string('hsc_name');
            $table->string('hsc_gpa');
            $table->string('bsc_name');
            $table->string('bsc_gpa');
            $table->string('msc_name')->nullable();
            $table->string('msc_gpa')->nullable();
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
        Schema::dropIfExists('finance_cvs');
    }
}
