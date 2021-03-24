<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            Schema::create('posts',function($table){
            $table->increments('id_posts');
            $table->string('title',50);
            $table->longText('description');
            $table->integer('NumViews');
            $table->integer('NumLikes');
            $table->timestamps();
            $table->integer('id_author')->unsigned();
            $table->foreign('id_author')->references('id_author')
                                        ->on('authors')
                                        ->onDelete('cascade');
        });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
