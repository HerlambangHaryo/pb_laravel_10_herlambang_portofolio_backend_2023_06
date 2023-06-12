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
        Schema::create('academic_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->date('date_start')->nullable();  
            $table->date('date_end')->nullable();  

            $table->string('university')->nullable(); 
            $table->string('country')->nullable(); 

            $table->text('task')->nullable(); 

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_backgrounds');
    }
};
