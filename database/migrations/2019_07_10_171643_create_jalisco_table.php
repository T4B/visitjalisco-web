<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJaliscoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jalisco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('header_text')->nullable();
            $table->text('history')->nullable();
            $table->text('info_top')->nullable();
            $table->text('info_left')->nullable();
            $table->string('language')->nullable();
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
        Schema::dropIfExists('jalisco');
    }
}
