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
        Schema::create('user_mission', function (Blueprint $table) {
        $table->bigIncrements('user_mission_id');

        $table->bigInteger('customer_id');
        $table->bigInteger('mission_id');

        $table->dateTime('submission_date');

        $table->integer('reward_point');

        $table->enum('status_approval', ['approved','reject']);

        $table->bigInteger('approved_by');

        $table->dateTime('date_added');
        $table->dateTime('date_modified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_mission');
    }
};
