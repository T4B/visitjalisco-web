<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_es');
            $table->string('color');
            $table->text('short_description_es')->nullable();
            $table->text('full_description_es')->nullable();
            //$table->string('interior_image')->nullable();
            $table->string('header_image')->nullable();
            $table->string('gallery_image')->nullable();
            $table->string('map_image')->nullable();
            $table->unsignedInteger('order');
            $table->string('slug');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
