<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Season extends Model
{
    use HasFactory;


     /**
     * Get all of the episodes for the Season     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function episodes() :HasMany
    {
        $this->hasMany(Episode::class);
    }

    /**
     * Get the entity that owns the Season
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entity(): BelongsTo
    {
        return $this->belongsTo(Entity::class);
    }

    /**
     * Get all of the season's likes.
     */
    public function likes() :MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
