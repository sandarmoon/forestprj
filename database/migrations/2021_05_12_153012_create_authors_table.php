<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('phoneno')->nullable();
            $table->text('address')->nullable();
            $table->text('bio')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('country_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('cascade');;
                
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')->onDelete('cascade');
                
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
        Schema::dropIfExists('authors');
    }
}
