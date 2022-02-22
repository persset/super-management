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
        //Create branches table
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->timestamps();
        });

        //Create product_branches table
        Schema::create('product_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('sell_price', 10, 2);
            $table->integer('min_stock');
            $table->integer('max_stock');
            $table->timestamps();

            //FK constraints
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('product_id')->references('id')->on('products');
        });

        //Remove concurrent columns from products table
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['sell_price', 'min_stock', 'max_stock']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Add columns back to products table
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('sell_price', 10, 2);
            $table->integer('min_stock');
            $table->integer('max_stock');
        });

        //Drop if exists the product_branches table
        Schema::dropIfExists('product_branches');

        //Drop if exists the branches table
        Schema::dropIfExists('branches');
    }
};
