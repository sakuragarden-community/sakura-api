<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Area extends Model
{
    /** @use HasFactory<\Database\Factories\AreaFactory> */
    use HasFactory;

    const string CODE_DRAWING = 'drawing';
    const string CODE_GAMES = 'games';
    const string CODE_WRITING = 'writing';
    const string CODE_ILLUSTRATION = 'illustration';

    const array CODES = [
        self::CODE_DRAWING,
        self::CODE_GAMES,
        self::CODE_WRITING,
        self::CODE_ILLUSTRATION,
    ];

    protected $fillable = [
        'name',
        'code',
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
