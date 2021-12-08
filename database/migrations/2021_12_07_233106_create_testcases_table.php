<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testcases', function (Blueprint $table) {
            $table->id();
            $table->enum('priority',['low', 'medium', 'high'])->default('low');
            $table->string('author');
            $table->string('executor')->nullable();
            $table->string('title');
            $table->text('short_description');
            $table->text('pre_conditions')->nullable();
            $table->text('test_steps');
            $table->text('test_data')->nullable();
            $table->text('expected_result');
            $table->text('actual_result');
            $table->text('comments')->nullable();
            $table->boolean('done')->default(false);
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
        Schema::dropIfExists('testcases');
    }
}
