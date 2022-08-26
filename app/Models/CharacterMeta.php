<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterMeta extends Model
{
    protected $fillable = [
        'CharacterId',    
        'MetaKey',
        'MetaValue',
    ];

    public function character()
    {
        return $this->belongsTo(Character::class);
    }
}
