<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Personality extends Model
{
    use HasFactory;
    protected $table = 'personalities';
    protected $fillable = ['type', 'description'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'personality_id');
    }
}
