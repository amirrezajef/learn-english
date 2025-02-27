<?php

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
        Schema::create('word_quizzes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('question_text', 255);
            $table->text('hint')->nullable();
            $table->enum('difficulty_level', ['easy', 'medium', 'hard'])->default('medium');
            $table->enum('question_type', ['multiple_choice', 'true_false', 'short_answer']);
            $table->text('correct_answer');
            $table->json('options')->nullable();
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreignIdFor(Word::class)->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('word_quizzes');
    }
};
