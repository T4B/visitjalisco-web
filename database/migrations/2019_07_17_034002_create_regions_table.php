<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_es');
            $table->string('color');
            $table->text('short_description_es')->nullable();
            $table->text('full_description_es')->nullable();
            $table->string('interior_image')->nullable();
            $table->string('main_image')->nullable();
            $table->string('interior_image_default')->nullable();
            $table->string('main_image_default')->nullable();
            $table->unsignedInteger('order');
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
        Schema::dropIfExists('regions');
    }
}
