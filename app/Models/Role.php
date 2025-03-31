<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /** @use HasFactory<\Database\Factories\RoleFactory> */
    use HasFactory;

    const string TYPE_ADMIN = 'admin';
    const string TYPE_COLLABORATOR = 'collaborator';
    const string TYPE_SUPPORTER = 'supporter';
    const string TYPE_MEMBER = 'member';
    const string TYPE_GUEST = 'guest';
    const string TYPE_SECTION = 'section';
    const string TYPE_INTEREST = 'interest';
    const string TYPE_PREFERENCE = 'preference';
    const string TYPE_TITLE = 'title';
    const array TYPES = [
        self::TYPE_GUEST,
        self::TYPE_MEMBER,
        self::TYPE_SUPPORTER,
        self::TYPE_COLLABORATOR,
        self::TYPE_ADMIN,
        self::TYPE_SECTION,
        self::TYPE_INTEREST,
        self::TYPE_PREFERENCE,
        self::TYPE_TITLE,
    ];

    protected $fillable = [
        'discord_id',
        'name',
        'type',
    ];
}
