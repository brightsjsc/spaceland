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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('alias');
            $table->string('tag')->nullable();
            $table->string('keyword')->nullable();
            $table->string('image');
            $table->text('description')->nullable();
            $table->longText('content');
            $table->integer('views');
            $table->integer('type_id');
            $table->integer('status');
            $table->unsignedBigInteger('postcate_id');
            $table->foreign('postcate_id')->references('id')->on('post_cates')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
