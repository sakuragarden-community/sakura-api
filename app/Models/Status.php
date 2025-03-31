<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    const string STATUS_ACTIVE = 'active';
    const string STATUS_SUSPENDED = 'suspended';
    const string STATUS_KICKED = 'kicked';
    const string STATUS_LEFT = 'left';

    const array STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_SUSPENDED,
        self::STATUS_KICKED,
        self::STATUS_LEFT,
    ];

    /** @use HasFactory<\Database\Factories\StatusFactory> */
    use HasFactory;
}
