<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreedownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freedownloads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->softDeletes();

            $table->timestamps();
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
        Schema::dropIfExists('freedownloads');
    }
}
