<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Activity;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $with = ['tags'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function activities() {
        $this->hasMany(Activity::class);
    }


    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function getArrayOfTagsAttribute()
    {

        return [];
        // return $this->user(Tag::class);
    }


}
