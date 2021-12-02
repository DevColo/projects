<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('voterID');
            $table->string('birthDate');
            $table->string('age');
            $table->string('county');
            $table->string('district');
            $table->string('cell');
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->integer('admin_id')->unsigned();
            $table->timestamps();

            $table->foreign('admin_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
