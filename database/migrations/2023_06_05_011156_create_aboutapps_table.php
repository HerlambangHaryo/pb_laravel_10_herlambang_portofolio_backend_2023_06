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
        Schema::create('aboutapps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ico')->nullable();
            $table->string('logo')->nullable();
            $table->string('theme')->nullable();
            $table->string('mode')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutapps');
    }
};
