<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Item extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_code');
            $table->string('item_name');
            $table->string('maker_name');
            $table->integer('price');
            $table->longText('description');
            $table->string('url');
            $table->string('body');
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
         Schema::drop('items');
    }
}
