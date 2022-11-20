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
        Schema::create('post',function(Blueprint $table){
            $table->id();
            $table->integer('author_id');
            $table->string('title');
            $table->string('slug');
            $table->integer('id_category');
            $table->longText('content_text');
            $table->text('cover');
            $table->dateTime('published');
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
        //
    }
};
