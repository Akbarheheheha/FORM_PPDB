<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasColumn('forms', 'no_telp')) {
            Schema::table('forms', function (Blueprint $table) {
                $table->string('no_telp')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('forms', 'no_telp')) {
            Schema::table('forms', function (Blueprint $table) {
                $table->dropColumn('no_telp');
            });
        }
    }
};
