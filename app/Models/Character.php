<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'Name',
        'UserId',
        'Level',
        'ExperiencePoints',
        'Strength',
        'Dexterity',
        'Constitution',
        'Intelligence',
        'Wisdom',
        'Chrisma',
        'ArmorClass',
        'Initiative',
        'Speed',
        'HitPoints',
        'ManaPoints',
        'Experience'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function meta()
    {
        return $this->hasMany(CharacterMeta::class);
    }
}
