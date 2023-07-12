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
        Schema::create('problems', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('order');
            $table->foreign('order')->references('id')->on('orders');
            $table->unsignedBigInteger('client');
            $table->foreign('client')->references('id')->on('users');
            $table->longText('description');
            $table->string('picture')->nullable();
            $table->string('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problems');
    }
};
