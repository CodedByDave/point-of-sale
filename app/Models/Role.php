<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    // Define the relationship with the User model
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
