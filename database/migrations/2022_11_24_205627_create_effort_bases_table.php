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
        Schema::create('effort_bases', function (Blueprint $table) {
            $table->id();
            $table->integer('inserted_by');
            $table->timestamps();
            $table->foreignId('exercise_base_id');
            $table->integer('set');
            $table->integer('reps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('effort_bases');
    }
};
