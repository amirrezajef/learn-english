<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = ['name', 'primary_color', 'secondary_color', 'background_color', 'font_family', 'custom_css'];
}
