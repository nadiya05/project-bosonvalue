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
        Schema::create('customer', function (Blueprint $table) {
        $table->bigIncrements('customer_id');

        $table->string('name', 255);
        $table->string('email', 255)->unique();

        $table->string('password', 255);
        $table->string('password_hash', 255);
        $table->string('password_salt', 255);

        $table->enum('gender', ['female','male']);

        $table->bigInteger('level');
        $table->integer('point');

        $table->string('photo', 255)->nullable();
        $table->text('tiktok_acc')->nullable();
        $table->text('ig_acc')->nullable();

        $table->string('phone_number', 15)->nullable();
        $table->string('identity_photo', 255)->nullable();

        $table->bigInteger('user_category_id');

        $table->text('address')->nullable();
        $table->string('city', 255)->nullable();
        $table->string('district', 255)->nullable();
        $table->string('post_code', 255)->nullable();

        $table->date('birth_date')->nullable();

        $table->dateTime('date_added');
        $table->dateTime('date_modified');

        $table->enum('status', ['active','inactive']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
