<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category__posts', function (Blueprint $table) {
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('blog_id')->references('id')->on('blogCategory');
            $table->primary(['post_id','blog_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_category__posts');
    }
};
