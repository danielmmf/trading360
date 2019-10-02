<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{

    public function up()
    {
        Schema::create('transfers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('amount')->nullable();
            $table->text('key')->nullable();
            $table->integer('status')->nullable();
            $table->integer('receiver')->nullable();
            $table->integer('operation')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('transfers');
    }
}
