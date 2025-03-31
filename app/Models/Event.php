<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    const string TYPE_SAKURA_NIGHT = 'sakura_night';
    const string TYPE_DISCORD_CHALLENGE = 'discord_challenge';
    const string TYPE_SOCIAL_CHALLENGE = 'social_challenge';

    const array TYPES = [
        self::TYPE_SAKURA_NIGHT,
        self::TYPE_DISCORD_CHALLENGE,
        self::TYPE_SOCIAL_CHALLENGE,
    ];

    const string PERMISSION_PUBLIC = 'public';
    const string PERMISSION_PRIVATE = 'private';

    const array PERMISSIONS = [
        self::PERMISSION_PUBLIC,
        self::PERMISSION_PRIVATE,
    ];

    protected $fillable = [
        'role_id',
        'title',
        'description',
        'type',
        'permission',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
}
