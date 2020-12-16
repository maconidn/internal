<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuTitle extends Model
{
    use HasFactory;

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
