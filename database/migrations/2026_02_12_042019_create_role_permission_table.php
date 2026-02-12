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
        Schema::create('role_permission', function (Blueprint $table) {
        $table->bigIncrements('role_permission_id');

        $table->bigInteger('role_id')->unsigned();
        $table->bigInteger('permission_id')->unsigned();

        $table->foreign('role_id')->references('role_id')->on('role');
        $table->foreign('permission_id')->references('permission_id')->on('permission');

        $table->dateTime('date_added');
        $table->dateTime('date_modified');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permission');
    }
};
