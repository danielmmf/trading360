<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('payments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('total')->nullable();
            $table->text('dados')->nullable();
            $table->integer('shop');
            $table->integer('type');
            $table->integer('user');
            $table->text('nfe')->nullable();
            $table->string('tid')->nullable();
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('payments');
    }
}
