<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsTag extends Model
{
    use HasFactory, SoftDeletes;

    public function newsContents(): BelongsToMany
    {
        return $this->belongsToMany(NewsContent::class);
    }
}