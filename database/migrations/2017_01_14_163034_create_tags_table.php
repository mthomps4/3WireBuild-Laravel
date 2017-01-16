<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('tagCount')->unsigned();
          $table->timestamps();
      });

      Schema::create('blogpost_tag', function(Blueprint $table){
        $table->integer('blogpost_id')->unsigned()->index();
        $table->integer('tag_id')->unsigned()->index();

        //$table->foreign('blogpost_id')->references('id')->on('blogposts')->onDelete('cascade');
        //$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('blogpost_tag');
        Schema::dropIfExists('tags');
    }
}
