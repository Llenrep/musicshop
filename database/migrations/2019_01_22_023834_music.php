<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Music extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function(Blueprint $table){
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            $table->string('user_name');
            $table->increments('id');
            $table->string('name_of_song');
            $table->string('song_file');
            $table->string('description');
            $table->string('image');
            $table->string('genre');
            $table->integer('streams');
            $table->timestamps();
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music'); 
    }
}
