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
        Schema::create('exercise_instances', function (Blueprint $table) {
            $table->id();
            $table->integer('inserted_by');
            $table->timestamps();
            $table->foreignId('exercise_id');  // maps to exercise for name
            $table->foreignId('session_instance_id');  // sessionI has 1 - M for sessionI to exerciseI
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
