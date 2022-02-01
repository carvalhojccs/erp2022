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
            $table->id();
            $table->string('name',100);
            $table->string('is_product', 1)->nullable();
            $table->string('is_material', 1)->nullable();
            $table->decimal('price', 10, 2)->default(0.00);
            $table->decimal('high_price', 10, 2)->default(0.00);
            $table->string('image',100)->nullable();
            $table->string('active', 1)->default('y');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('unit_id')->constrained();
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
