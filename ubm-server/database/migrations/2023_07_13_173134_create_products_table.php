<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->text('product_description');
            $table->string('product_part_number');
            $table->string('product_make');
            $table->string('product_manufacturer');
            $table->integer('product_weight');
            $table->string('product_fccid');
            $table->float('product_cost');
            $table->float('product_selling_price');
            $table->string('product_condition');
            $table->integer('product_quantity');
            $table->string('product_storage');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
