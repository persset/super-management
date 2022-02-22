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
        Schema::create('measurement_units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('description', 30);
            $table->timestamps();
        });

        //Relationship with products table
        Schema::table('products', function(Blueprint $table) {
            $table->unsignedBigInteger('unit_id');

            $table->foreign('unit_id')->references('id')->on('measurement_units');
        });

        Schema::table('product_details', function(Blueprint $table) {
            $table->unsignedBigInteger('unit_id');

            $table->foreign('unit_id')->references('id')->on('measurement_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Remove FK from product details table
        Schema::table('product_details', function(Blueprint $table) {
            //Remove FK Constraint
            //$table->dropforeign('product_details_measurement_units_id_foreign'); //[table_name]_[referenced_table]_[referencedColumn]_foreign
            
            /**
             * Its posible to pass an array containing the column name that holds the foreign key, the array will be converted to a foreign key
             * constraint name using Laravel's constraint naming conventions.
             */
            $table->dropForeign(['unit_id']);
            //Remove FK Column
            $table->dropColumn('unit_id');
        });

        //Remove FK from products table
        Schema::table('products', function(Blueprint $table) {
            //Remove FK constraint
            //$table->dropforeign('product_measurement_units_id_foreign');//[table_name]_[referenced_table]_[referencedColumn]_foreign
            
            $table->dropForeign(['unit_id']);
            //Remove FK column
            $table->dropColumn('unit_id');
        });

        //Drop mesaurement_units table
        Schema::dropIfExists('measurement_units');
    }
};
