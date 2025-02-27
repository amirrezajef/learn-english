<?php

namespace App\Models\Team;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
    protected $table = 'team_profiles';

    protected $fillable = ['team_id', 'name', 'description'];

    // Relationships
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function theme(): HasOne
    {
        return $this->hasOne(Theme::class);
    }
}
