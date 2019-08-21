<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePostsTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('language');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('title', 'title_es');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('excerpt', 'excerpt_es');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('text', 'text_es');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('slug', 'slug_es');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
