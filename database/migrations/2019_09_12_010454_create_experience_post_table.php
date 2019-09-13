<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_post', function (Blueprint $table) {
            $table->primary(['experience_id', 'post_id']);
            $table->unsignedBigInteger('experience_id');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();

            $table->foreign('experience_id')->references('id')->on('experiences')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_post');
    }
}
