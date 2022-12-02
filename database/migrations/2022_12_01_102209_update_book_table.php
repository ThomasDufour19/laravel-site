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
        Schema::table('books', function($table){
           $table->unsignedBigInteger('genre_id');
           $table->foreign('genre_id')->references('id')->on('genres'); 
        });
        Schema::table('books', function($table1){
            $table1->unsignedBigInteger('auteur_id');
            $table1->foreign('auteur_id')->references('id')->on('auteurs'); 
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
};
