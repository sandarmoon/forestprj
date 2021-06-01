<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrowserItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browser_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('browser_id');
            $table->unsignedBigInteger('item_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('browser_id')
            ->references('id')
            ->on('browsers')->onDelete('cascade');

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
        Schema::dropIfExists('browser_item');
    }
}
