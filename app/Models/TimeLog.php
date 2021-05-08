<?php

namespace App\Models;

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
}
