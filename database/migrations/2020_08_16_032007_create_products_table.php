<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('alias');
            $table->string('address');
            $table->unsignedBigInteger('product_cate_id');
            $table->foreign('product_cate_id')->references('id')->on('product_cates')->onDelete('cascade');
            
            $table->integer('project_id')->nullable();
            $table->string('acreage');
            $table->string('price');
            $table->integer('price_type')->default(0)->comment('0: Thỏa thuận | 1: Tháng | 2: m2');

            $table->string('description')->nullable();
            $table->string('witdh')->nullable();
            $table->string('land_witdh')->nullable();
            $table->string('home_direction')->nullable();
            $table->string('bacon_direction')->nullable();
            $table->string('floor_number')->nullable();
            $table->string('room_number')->nullable();
            $table->string('toilet_number')->nullable();
            $table->string('furniture')->nullable();
            $table->string('legality')->nullable();

            $table->string('image');
            $table->string('gallerys');
            $table->string('video_url');

            $table->string('video_url');

            $table->string('contact_name')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_mobile');
            $table->string('contact_email')->nullable();
            $table->integer('status');

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
        Schema::dropIfExists('products');
    }
}
