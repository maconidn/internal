<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'divitions_id',
        'positions_id',
        'name',
        'level',
        'email',
        'password',
    ];

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

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function mailnumbers()
    {
        return $this->hasMany(MailNumber::class, 'users_id'); // harusnya database querynya user_id
    }

    public function divitions()
    {
        return $this->belongsTo(Divition::class);
    }

    public function positions()
    {
        return $this->belongsTo(Position::class);
    }

    public function details()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function permits()
    {
        return $this->hasMany(Permit::class, 'users_id');
    }
}
