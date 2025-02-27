<?php

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
        Schema::create('user_progresses', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->enum('status', ['not_started', 'in_progress', 'completed']);
            $table->unsignedTinyInteger('total_words_completed');
            $table->unsignedTinyInteger('quiz_score')->nullable();
            $table->date('for_date')->uni;
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            // Define the foreign key constraint for user_id
            $table->foreignIdFor(User::class)->onDelete('cascade');

            // Add a unique composite index on 'user_id' and 'for_date'
            $table->unique(['user_id', 'for_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_progresses');
    }
};
