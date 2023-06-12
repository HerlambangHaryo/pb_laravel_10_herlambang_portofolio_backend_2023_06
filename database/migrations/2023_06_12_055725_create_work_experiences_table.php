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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->date('date_start')->nullable();  
            $table->date('date_end')->nullable();  
            $table->tinyInteger('is_present')->default(0);  

            $table->string('company')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('city')->nullable();
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
        Schema::dropIfExists('work_experiences');
    }
};
