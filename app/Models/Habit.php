<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;
    function habitTracks()
    {
        return $this->hasMany('App\Models\HabitTrack');
    }
}
