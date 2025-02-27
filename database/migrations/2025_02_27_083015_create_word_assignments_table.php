<?php

use App\Models\Team\Team;
use App\Models\Word\Word;
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
        Schema::create('word_assignments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('assigned_date');

            // Define the foreign key constraint for team_id
            $table->foreignIdFor(Team::class)->onDelete('cascade');

            // Define the foreign key constraint for word_id
            $table->foreign(Word::class)->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_assignments');
    }
};
