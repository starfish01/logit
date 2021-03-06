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

    protected $with = ['user', 'time_logs', 'tags'];

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
            if (strlen($log->end) !== 0 && $log->end > $log->start) {
                $time = $time + ($log->end - $log->start);
            }
        }
        return CarbonInterval::seconds($time)->cascade()->forHumans(['short' => true]);
    }

    public function getActiveLogAttribute()
    {
        return $this->time_logs->where('id', $this->active_time_log)[0];
    }

    /**
     * The tags that belong to the user.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_activity');
    }
}
