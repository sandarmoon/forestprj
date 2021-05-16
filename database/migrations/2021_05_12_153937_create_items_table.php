<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('zipfile')->nullable();
            $table->text('thumbnail')->nullable();
            $table->text('previews')->nullable();
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('genre_id');
            $table->string('version')->nullable();
            $table->text('demoUrl')->nullable();
            $table->string('responsive')->nullable();
            $table->text('tag')->nullable();
            $table->integer('status')->nullable();
            $table->integer('price')->nullable();
            $table->string('price_type')->nullable();
            $table->text('message')->nullable();

            $table->foreign('subcategory_id')
            ->references('id')
            ->on('subcategories')->onDelete('cascade');

            $table->foreign('author_id')
            ->references('id')
            ->on('authors')->onDelete('cascade');

            $table->foreign('genre_id')
            ->references('id')
            ->on('genres')->onDelete('cascade');
           
            $table->softDeletes();
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
        Schema::dropIfExists('items');
    }
}
