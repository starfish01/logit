<?php

namespace App\Models;

use Carbon\CarbonInterval;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['user', 'time_logs'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function time_logs()
    {
        return $this->hasMany(TimeLog::class);
    }

    public function getTotalTimeAttribute()
    {
        $time = 0;
        foreach ($this->time_logs as $key => $log) {
            $time = $time + ($log->end - $log->start);
        }
        return CarbonInterval::seconds($time)->cascade()->forHumans(['short' => true]);
    }

}
