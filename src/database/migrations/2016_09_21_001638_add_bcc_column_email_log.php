<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('email_log', function ($table) {
            if (!Schema::hasColumn('email_log', 'bcc')) {
                $table->string('to')->nullable()->change();
                $table->string('bcc')->after('to')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('email_log', function ($table) {
            $table->string('to')->change();
            $table->dropColumn('bcc');
        });
    }
};
