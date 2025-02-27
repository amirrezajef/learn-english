<?php

namespace App\Models\Word;

use App\Models\Team\WordAssignment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Word extends Model
{
    protected $fillable = ['word', 'meaning', 'example'];

    // Relationships
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quiz::class);
    }

    public function assignments(): HasMany
    {
        return $this->hasMany(WordAssignment::class);
    }
}
