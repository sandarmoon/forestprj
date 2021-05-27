<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('item_id');
            $table->string('sorting');
            $table->softDeletes();

            $table->timestamps();

            $table->foreign('collection_id')
            ->references('id')
            ->on('collections')->onDelete('cascade');

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
        Schema::dropIfExists('collection_item');
    }
}
