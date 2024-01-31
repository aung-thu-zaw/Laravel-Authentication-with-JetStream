<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlbumPhoto extends Model
{
    use HasFactory, SoftDeletes;

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}
