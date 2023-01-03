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
        Schema::create('program_sessions', function (Blueprint $table) {
            $table->id();
            $table->integer('inserted_by');
            $table->timestamps();
            $table->foreignId('program_id');  // maps to program
            $table->integer('order');
            $table->integer('break');  // rest period (days until next session)
            // i.e. 0 means can do another session on the same day, 1 means can do a session the next day
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_sessions');
    }
};
