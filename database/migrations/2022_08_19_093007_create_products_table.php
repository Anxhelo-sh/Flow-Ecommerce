<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('category')->unsigned();
            $table->string('name');
            $table->string('color');
            $table->string('photo',300);
            $table->decimal('price', 9, 3);
            $table->text('short_description')->nullable();
            $table->mediumText('long_description')->nullable();
            $table->integer('available')->nullable(); //todo - are we sure we will have stocks for products themselves and not just for timeslots?
            $table->integer('quantity')->nullable();

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
        Schema::dropIfExists('products');
    }
};
