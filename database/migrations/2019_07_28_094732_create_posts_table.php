<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('posts', function (Blueprint $table) { 
            $table->increments('id'); 
             $table->integer('type')->default(0); 
             $table->integer('user_id'); 
             $table->integer('category_id'); 
             $table->string('title'); 
             $table->string('cover'); 
             $table->string('description'); 
             $table->text('body'); 
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
         Schema::drop('posts');
    }
}
