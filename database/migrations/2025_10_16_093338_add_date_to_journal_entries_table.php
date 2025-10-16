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
        Schema::table('journal_entries', function (Blueprint $table) {
            $table->date('date')->nullable()->after('total');
            $table->enum('unit', ['Pcs', 'Unit', 'Buah', 'Gram', 'Kg', 'Dus', 'Box', 'Lusin', 'Pack'])->after('qty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('journal_entries', function (Blueprint $table) {
            //
        });
    }
};
