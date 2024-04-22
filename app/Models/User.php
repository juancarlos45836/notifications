<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Model
{

     public function categories(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Category');
    }
}

