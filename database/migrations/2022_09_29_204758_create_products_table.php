<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('quantity')->default(0);
            $table->decimal('weight', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);
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
}
