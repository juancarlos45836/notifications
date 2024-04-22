<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $table = "categories";

     public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\User');
    }

}
