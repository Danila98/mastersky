<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtriclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atricles', function (Blueprint $table) {
            $table->bigIncrements('articles_id');

            $table->integer('categories_id');
            $table->string('title');
            $table->text('content');
            $table->integer('likes');
            $table->integer('view');
            $table->boolean('hidden');
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
        Schema::dropIfExists('atricles');
    }
}
