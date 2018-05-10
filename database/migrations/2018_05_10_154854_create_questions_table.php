<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('quest_id');
            $table->string('quest_text', 200);
            $table->string('quest_type', 100);
            $table->string('opt_a', 100);
            $table->string('opt_b', 100);
            $table->string('opt_c', 100);
            $table->string('opt_d', 100);
            $table->char('true_answer', 1);
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
        Schema::dropIfExists('questions');
    }
}
