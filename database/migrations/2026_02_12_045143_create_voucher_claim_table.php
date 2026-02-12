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
        Schema::create('voucher_claim', function (Blueprint $table) {
        $table->bigIncrements('voucher_claim_id');

        $table->bigInteger('customer_id');
        $table->bigInteger('voucher_id');

        $table->enum('status', ['belum diklaim','sudah diklaim']);

        $table->dateTime('claimed_at')->nullable();

        $table->dateTime('date_added');
        $table->dateTime('date_modified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_claim');
    }
};
