<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('level', function (Blueprint $table) {
        $table->bigIncrements('level_id');
        $table->integer('level_number');
        $table->string('level_name', 255);
        $table->integer('min_score');

        $table->dateTime('date_added');
        $table->dateTime('date_modified');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level');
    }
};
