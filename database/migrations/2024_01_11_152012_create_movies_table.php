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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id')->nullable();
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('slug')->nullable();
            $table->string('slug_ar')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_ar')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->text('meta_tag')->nullable();
            $table->text('keywords')->nullable();
            $table->text('keywords_ar')->nullable();
            $table->text('video_link')->nullable();
            $table->text('meta_tag_ar')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_description_ar')->nullable();
            $table->string('uuid')->nullable();
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
        Schema::dropIfExists('movies');
    }
};
