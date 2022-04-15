<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

/**
 * The Entity that belong to the Tag
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function Entity(): BelongsToMany
{
    return $this->belongsToMany(Entity::class, 'entities_tags', 'tag_id', 'entity_id');
}
}
