<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('P_ID');
            $table->string('advisor');
            $table->bigInteger('student_id');
            $table->string('title');
            $table->string('description');
            $table->string('platform');
            $table->string('framework');
            $table->string('technology');
            $table->string('git');
            $table->string('tags');
            $table->string('is_accepted')->default('NO');
            $table->string('_1st_phase')->default('Not updated');
            $table->string('_2nd_phase')->default('Not updated');
            $table->string('_3rd_phase')->default('Not updated');

            $table->string('is_published')->default('NO');


            $table->string('comment');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
