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
            $table->bigInteger('product_category_id');
            $table->string('name');
            $table->string('color');
            $table->string('photo',300);
            $table->decimal('price', 9, 3);
            $table->text('short_description')->nullable();
            $table->mediumText('long_description')->nullable();
            $table->integer('available')->nullable();
            $table->integer('quantity')->nullable();
            $table->foreign('product_category_id')->references('id')->on('product_categories');
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
