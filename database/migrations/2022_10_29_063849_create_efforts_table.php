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
        Schema::create('efforts', function (Blueprint $table) {
            $table->id();
            $table->integer('inserted_by');
            $table->timestamps();
            $table->foreignId('exercise_instance_id');
            $table->integer('set');
            $table->integer('reps');
            $table->float('weight');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efforts');
    }
};
