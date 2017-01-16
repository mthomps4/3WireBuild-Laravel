<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('categoryCount')->unsigned();
          $table->timestamps();
      });

      Schema::create('blogpost_category', function(Blueprint $table){
        $table->integer('blogpost_id')->unsigned()->index();
        $table->integer('category_id')->unsigned()->index();

        //$table->foreign('blogpost_id')->references('id')->on('blogposts')->onDelete('cascade');
        //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
      Schema::dropIfExists('blogpost_category');
      Schema::dropIfExists('categories');
    }
}
