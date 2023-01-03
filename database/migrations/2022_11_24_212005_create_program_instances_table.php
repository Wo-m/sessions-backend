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
        Schema::create('program_instances', function (Blueprint $table) {
            $table->id();
            $table->integer('inserted_by');
            $table->timestamps();
            $table->foreignId('program_id');  // maps to program
            $table->date('start'); // start date of program
            $table->integer('periods'); // number of periods this instance goes for
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_instances');
    }
};
