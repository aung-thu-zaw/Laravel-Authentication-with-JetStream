<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsContent extends Model
{
    use HasFactory, SoftDeletes;

    public function newsSubcategory(): BelongsTo
    {
        return $this->belongsTo(NewsSubcategory::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function newsTags(): BelongsToMany
    {
        return $this->belongsToMany(NewsTag::class);
    }
}
