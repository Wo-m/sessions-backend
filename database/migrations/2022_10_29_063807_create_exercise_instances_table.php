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
            $table->string('insertedBy');
            $table->timestamps();
            $table->integer('exerciseReferenceId');  // maps to exercise for name
            $table->integer('sessionInstanceId');  // sessionI has 1 - M for sessionI to exerciseI
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
