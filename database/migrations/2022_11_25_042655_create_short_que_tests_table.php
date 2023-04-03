<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortQueTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_que_tests', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id');
            $table->string('test_name');
            $table->string('subject_id');
            $table->string('marks');
            $table->string('duration');
            $table->string('no_of_que');
            $table->string('branch');
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
        Schema::dropIfExists('short_que_tests');
    }
}
