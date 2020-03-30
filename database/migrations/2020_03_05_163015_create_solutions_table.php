<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Question');
            $table->boolean('answer');
            $table->string('opation');
            $table->boolean('answer2');
            $table->string('opation2');
            $table->boolean('answer3');
            $table->string('opation3');
            $table->boolean('answer4');
            $table->string('opation4');
            //$table->integer('question_id')->unsigned();
            /*

            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');

            */

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
        Schema::dropIfExists('solutions');
    }
}
