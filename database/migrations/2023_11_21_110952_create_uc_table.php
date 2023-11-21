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
        Schema::create('class', function (Blueprint $table) {
            $table->id('class_id');
            $table->foreignId('uc_id')->constrained('uc', 'uc_id');
            $table->foreignId('student_id')->constrained('student', 'student_id');
            $table->tinyInteger('state')->default(0);
            $table->timestamp('timestamp');
            $table->timestamps();
        });
    }
   
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uc');
    }
};
