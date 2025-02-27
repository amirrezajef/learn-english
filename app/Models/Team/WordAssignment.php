<?php

namespace App\Models\Team;

use App\Models\Word\Word;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WordAssignment extends Model
{
    protected $fillable = ['team_id', 'word_id', 'assigned_date'];

    // Relationships
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function word(): BelongsTo
    {
        return $this->belongsTo(Word::class);
    }
}
