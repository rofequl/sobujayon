<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('brand_id');
            $table->integer('name_id');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('color')->nullable();
            $table->integer('age_id');
            $table->integer('item_weight_id');
            $table->integer('height_id');
            $table->integer('width_id');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('profit_margin');
            $table->string('image',500)->nullable();
            $table->string('image2',500)->nullable();
            $table->string('image3',500)->nullable();
            $table->string('image4',500)->nullable();
            $table->string('video',500)->nullable();
            $table->integer('qty');
            $table->integer('delivery_charge');
            $table->integer('with_fruit')->default(0);
            $table->integer('with_flower')->default(0);
            $table->integer('origin_country_id');
            $table->integer('temperature_id');
            $table->string('what_you_will_get',500);
            $table->string('related_item',500);
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
