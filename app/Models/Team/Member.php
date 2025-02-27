<?php

namespace App\Models\Team;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'team_members';

    protected $fillable = ['team_id', 'user_id', 'role'];

    // Relationships
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
