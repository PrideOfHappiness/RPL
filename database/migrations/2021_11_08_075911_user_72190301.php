<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User72190301 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_72190301', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->string('nama');
            $table->string('no_telp');
            $table->string('email');
            $table->string('status');
            $table->string('gender');
            $table->string('password');
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
        //
    }
}
