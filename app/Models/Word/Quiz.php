<?php

namespace App\Models\Word;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz extends Model
{
    protected $table = 'word_quizzes';

    protected $fillable = ['word_id', 'question', 'answer', 'options'];

    protected $casts = [
        'options' => 'array',
    ];

    // Relationships
    public function word(): BelongsTo
    {
        return $this->belongsTo(Word::class);
    }
}
