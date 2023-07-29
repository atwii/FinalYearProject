<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPSTORM_META\type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('type');
            $table->longText('description');
            $table->longText('picture');
            $table->unsignedBigInteger('seeker');
            $table->foreign('seeker')->references('id')->on('users');
            $table->unsignedBigInteger('provider')->nullable();
            $table->foreign('provider')->references('id')->on('users');
            $table->string('status');
            $table->longText('address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
