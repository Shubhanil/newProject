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
            $table->string('name');
            $table->string('category_id');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->double('price', 8, 2)->nullable();	
            $table->double('cgst', 8, 2)->nullable();	
            $table->double('sgst', 8, 2)->nullable();	
            $table->double('total_inc_tax', 8, 2)->nullable();	
            $table->boolean('is_active')->default(1);
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
