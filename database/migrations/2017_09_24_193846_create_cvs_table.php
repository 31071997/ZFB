<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('age');
            $table->string('address');
            $table->string('skills');
            $table->string('email');
            $table->string('post');

            $table->string('ssc_name');
            $table->string('ssc');

            $table->string('hsc_name');

            $table->string('hsc');

           $table->string('bs_name');
            $table->string('bs');
            $table->string('ms_name');
            $table->string('ms');



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
        Schema::dropIfExists('cvs');
    }
}
