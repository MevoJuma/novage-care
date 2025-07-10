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
        Schema::create('wellnesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('elder_id')->constrained('elders')->onDelete('cascade');
            $table->foreignId('caregiver_id')->constrained('users')->onDelete('cascade');
            $table->date('checkin_date');
            $table->string('blood_pressure')->nullable();
            $table->integer('heart_rate')->nullable();
            $table->string('mood')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wellnesses');
    }
};
