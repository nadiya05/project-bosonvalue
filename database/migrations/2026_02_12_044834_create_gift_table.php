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
        Schema::create('gift', function (Blueprint $table) {
        $table->bigIncrements('gift_id');

        $table->integer('point');
        $table->text('photo')->nullable();

        $table->dateTime('date_added');
        $table->dateTime('date_modified');

        $table->bigInteger('created_by');
        $table->bigInteger('voucher_id');
         });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gift');
    }
};
