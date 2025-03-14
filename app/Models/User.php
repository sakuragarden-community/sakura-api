<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    const string STATUS_ACTIVE = 'active';
    const string STATUS_INACTIVE = 'inactive';
    const string STATUS_SUSPENDED = 'suspended';
    const string STATUS_KICKED = 'kicked';
    const string STATUS_LEFT = 'left';

    const array STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
        self::STATUS_SUSPENDED,
        self::STATUS_KICKED,
        self::STATUS_LEFT,
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'guild_id',
        'discord_id',
        'type_id',
        'presentation_link',
        'whatsapp',
        'exp',
        'statuses',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'statuses' => 'array'
        ];
    }
}
