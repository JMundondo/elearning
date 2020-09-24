<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('form_name');
            $table->string('email')->unique();
           
            $table->string('password');
          
           
            $table->unsignedBigInteger('form_id');

            $table->foreign('form_id')->references('id')->on('forms');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();

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
       // Schema::dropIfExists('students');
        /**Schema::table('students',function(Blueprint $table){
            $table->dropForeign(['form_id']);
            $table->dropColumn('form_id');
        });*/
        Schema::dropIfExists('students');
    }
}
