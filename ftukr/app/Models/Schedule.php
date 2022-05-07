<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function club()
    {
        return $this->belongsTo(Clubs::class);
    }
    public function coach()
    {
        return $this->belongsTo(Coachs::class);
    }
    public function dayWeek()
    {
        return $this->belongsTo(DayWeeks::class);
    }
}
