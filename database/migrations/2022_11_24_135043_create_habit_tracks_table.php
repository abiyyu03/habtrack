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
        Schema::create('habit_tracks', function (Blueprint $table) {
            $table->id();
            $table->integer('habit_id')->references('id')->on('habits');
            $table->date('date');
            $table->time('time');
            $table->enum('status',['done','undone']);
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
        Schema::dropIfExists('habit_tracks');
    }
};
