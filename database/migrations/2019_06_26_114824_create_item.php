<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->char('code_item', 8);
            $table->char('name', 50);
            $table->text('descrip');
            $table->decimal('stock', 5, 2);
            $table->decimal('price', 12, 2);
            $table->decimal('weight', 5, 2);
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
