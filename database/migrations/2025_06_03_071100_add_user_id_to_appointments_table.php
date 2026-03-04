<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Idempotent: only adds user_id if missing (create_appointments_table may already define it).
     */
    public function up(): void
    {
        if (Schema::hasColumn('appointments', 'user_id')) {
            return;
        }

        Schema::table('appointments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * Only drops the foreign key; leaves user_id column (may have been created by create_appointments_table).
     */
    public function down(): void
    {
        if (!Schema::hasColumn('appointments', 'user_id')) {
            return;
        }

        try {
            Schema::table('appointments', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            });
        } catch (\Throwable $e) {
            // Foreign key may not exist if column was from create_appointments_table
        }
    }
};
