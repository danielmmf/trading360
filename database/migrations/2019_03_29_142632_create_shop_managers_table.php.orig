<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopManagersTable extends Migration
{

    public function up()
    {
        Schema::create('shop_managers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->integer('manager_id');
            // Constraints declaration
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('shop_managers');
    }
}
