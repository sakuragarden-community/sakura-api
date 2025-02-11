<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Edition extends Model
{
    /** @use HasFactory<\Database\Factories\EditionFactory> */
    use HasFactory;

    protected $fillable = [
        'event_id',
        'date_start',
        'date_end',
        'notes',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    protected $casts = [
        'date_start' => 'datetime',
        'date_end' => 'datetime',
    ];
}
