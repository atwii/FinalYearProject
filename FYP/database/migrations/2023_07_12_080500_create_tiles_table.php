<?php

use Faker\Guesser\Name;
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
        Schema::create('tiles', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('picture')->nullable();
            $table->longText('description');
            $table->string('color');
            $table->float('price_retail');
            $table->float('price_wholesale');
            $table->string('size');
            $table->float('quantity');
            $table->float('packing');
            $table->string('origin');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiles');
    }
};
