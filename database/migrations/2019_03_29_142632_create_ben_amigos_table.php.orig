<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenAmigosTable extends Migration
{

    public function up()
    {
        Schema::create('ben_amigos', function(Blueprint $table) {
            $table->increments('id');
            $table->text('eu');
            $table->text('amigo');
            $table->integer('relationship')->nullable();
            $table->integer('status')->nullable();
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ben_amigos');
    }
}
