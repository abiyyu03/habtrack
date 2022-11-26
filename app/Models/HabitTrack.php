<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitTrack extends Model
{
    use HasFactory;
    protected $table = 'habit_tracks';
    protected $fillable = ['habit_id','date','status'];

    function habit()
    {
        return $this->belongsTo('App\Models\Habit');
    }
}
