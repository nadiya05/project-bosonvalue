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
    Schema::create('user_category', function (Blueprint $table) {
    $table->bigIncrements('user_category_id');
    $table->string('user_category_name', 255);

    $table->dateTime('date_added');
    $table->dateTime('date_modified');
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_category');
    }
};
