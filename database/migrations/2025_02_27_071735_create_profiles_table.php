<?php

use App\Models\Team\Team;
use App\Models\Theme;
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
        Schema::create('team_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Foreign key constraints
            $table->foreignIdFor(Team::class)->onDelete('cascade');
            $table->foreignIdFor(Theme::class)->onDelete('set null');

            $table->unsignedTinyInteger('words_per_day')->default(10);
            $table->boolean('active_quiz')->default(false);
            $table->string('logo_url', 255)->nullable();
            $table->text('description')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_profiles');
    }
};
