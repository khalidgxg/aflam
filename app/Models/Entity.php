<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Entity extends Model
{
    use HasFactory;

    protected $table = 'entities';

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The Tag that belong to the Entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'entities_tags', 'entity_id', 'tag_id');
    }

    /**
     * Get all of the season for the Entity
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function season(): HasMany
    {
        return $this->hasMany(Season::class);
    }
}
