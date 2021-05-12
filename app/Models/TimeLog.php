<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLog extends Model
{
    use HasFactory;

    public function activity()
    {
        $this->hasOne(Activity::class);
    }

    public function getStartHourAttribute()
    {
        return date('H', $this->start);
    }

    public function getStartTimeAttribute()
    {
        $timezone = optional(auth()->user())->timezone ?? config('app.timezone');
        return Carbon::createFromTimestamp($this->start)->timezone($timezone);
    }
    
    public function getEndTimeAttribute()
    {
        $timezone = optional(auth()->user())->timezone ?? config('app.timezone');
        return Carbon::createFromTimestamp($this->end)->timezone($timezone);
    }
}
