<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{

    public function up()
    {
        Schema::create('shops', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('total')->nullable();
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('shops');
    }
}
