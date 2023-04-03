<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_modules', function (Blueprint $t) {
            $t->id();
            $t->integer('assigner_id');
            $t->integer('teacher_id');
            $t->integer('test_id');
            $t->integer('ospque_id')->nullable();
            $t->integer('shortQue_id')->nullable();
            $t->integer('viva_id')->nullable();
            $t->string('student_ids');
            $t->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_modules');
    }
}
