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
        Schema::create('caregiver_performances', function (Blueprint $table) {
            $table->id();
            $table->foreign('caregiver_id')->constrained('users')->onDelete('cascade');
            $table->integer('appointments_completed')->default(0);
            $table->integer('elders_assigned')->default(0);
            $table->decimal('average_rating', 3, 2)->default(0.00);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregiver_performances');
    }
};
