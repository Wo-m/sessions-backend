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
        Schema::create('exercise_instance', function (Blueprint $table) {
            $table->id();
            $table->integer('insertedBy');
            $table->timestamps();
            $table->integer('exercise_id');  // maps to exercise for name
            $table->integer('session_instance_id');  // sessionI has 1 - M for sessionI to exerciseI
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_instances');
    }
};
