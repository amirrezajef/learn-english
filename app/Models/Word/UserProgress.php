<?php

namespace App\Models\Word;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    protected $table = 'user_progresses';

    protected $fillable = ['user_id', 'word_id', 'quiz_id', 'is_correct'];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
