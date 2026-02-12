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
        Schema::create('mission', function (Blueprint $table) {
        $table->bigIncrements('mission_id');

        $table->string('mission_name', 255);
        $table->integer('reward_point');
        $table->text('notes')->nullable();

        $table->dateTime('start_date');
        $table->dateTime('end_date');

        $table->bigInteger('target_id');

        $table->enum('method', ['auto','manual']);

        $table->enum('mission_type', ['lengkapi data','scan','posting']);

        $table->bigInteger('created_by');

        $table->dateTime('date_added');
        $table->dateTime('date_modified');
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mission');
    }
};
