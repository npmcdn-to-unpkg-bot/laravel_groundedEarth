<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('inquiries', function (Blueprint $table) {
             $table->increments('id');
             $table->string('email');
             $table->string('name');
             $table->string('city');
             $table->string('state');
             $table->text('comment');
             $table->timestamps();
             $table->softDeletes();
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
         Schema::drop('inquiries');
     }
}
