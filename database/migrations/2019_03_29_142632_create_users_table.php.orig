<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('user_token');
            $table->text('password')->nullable();
            $table->integer('logado');
            $table->text('login')->nullable();
            $table->text('imagem')->nullable();
            $table->double('wallet');
            $table->string('profile_img')->nullable();
            $table->text('raw_login_info')->nullable();
            $table->integer('parent_user')->nullable();
            $table->text('access_token')->nullable();
            $table->text('expiration_time')->nullable();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')
                ->references('id')
                ->on('groups');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
