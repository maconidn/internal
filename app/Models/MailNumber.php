<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailNumber extends Model
{
    use HasFactory;

    protected $fillable = ['for', 'subject', 'users_id', 'divitions_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function divitions()
    {
        return $this->belongsTo(Divition::class);
    }
}
