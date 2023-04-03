<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOspQuestionTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osp_question_tests', function (Blueprint $table) {
            $table->id();
            $table->string('osp_test_id');
            $table->string('question');
            $table->string('no_of_step');
            $table->string('answer');
            $table->string('que_marks');
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
        Schema::dropIfExists('osp_question_tests');
    }
}
