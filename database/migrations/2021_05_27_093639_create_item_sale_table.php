<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sale', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('sale_id');
            $table->unsignedBigInteger('item_id');
            $table->softDeletes();
            
            $table->timestamps();

            $table->foreign('sale_id')
            ->references('id')
            ->on('sales')->onDelete('cascade');

            $table->foreign('item_id')
            ->references('id')
            ->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_sale');
    }
}
