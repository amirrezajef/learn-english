<?php

use App\Models\Team\Team;
use App\Models\User\User;
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
        Schema::create('team_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('team_id');
            $table->uuid('user_id');
            $table->enum('role', ['member', 'admin'])->default('member');
            $table->timestamp('joined_at')->useCurrent();
            $table->timestamps();

            // Foreign key constraints
            $table->foreignIdFor(Team::class)->onDelete('cascade');
            $table->foreignIdFor(User::class)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
