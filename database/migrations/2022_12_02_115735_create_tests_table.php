<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_id');
            $table->string('test_name');
            $table->string('subject_id');
            $table->string('marks');
            $table->string('duration');
            $table->string('branch');
            $table->date('date');
            $table->string('mcq_test_id');
            $table->string('shortans_test_id');
            $table->string('osp_test_id');
            $table->string('viva_name');
            $table->string('viva_marks');
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
        Schema::dropIfExists('tests');
    }
}
