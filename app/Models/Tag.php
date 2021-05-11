<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(Activity::class, 'tag_activity');
    }

    public function tags()
    {
        return $this->belongsTo(User::class);
    }
}
