<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entity extends Model
{
    use HasFactory;

    protected $taple = 'entities';

    public function Category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
 
}
