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
        Schema::create('voucher', function (Blueprint $table) {
        $table->bigIncrements('voucher_id');

        $table->string('voucher_name', 255);
        $table->text('description')->nullable();
        $table->string('photo', 255)->nullable();

        $table->dateTime('start_date');
        $table->dateTime('end_date');

        $table->enum('status', ['active','inactive']);

        $table->dateTime('date_added');
        $table->dateTime('date_modified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher');
    }
};
