<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;

    const string TYPE_SECTION = 'section';
    const string TYPE_INTEREST = 'interest';
    const string TYPE_PREFERENCE = 'preference';
    const string TYPE_TITLE = 'title';

    const array TYPES = [
        self::TYPE_SECTION,
        self::TYPE_INTEREST,
        self::TYPE_PREFERENCE,
        self::TYPE_TITLE,
    ];

    protected $fillable = [
        'guild_id',
        'name',
        'type',
        'guild_color',
        'guild_permissions',
    ];

    protected $casts = [
        'guild_permissions' => 'array',
    ];
}
