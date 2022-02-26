<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Person extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'city' => $this->city,
            'caste' => $this->caste
        ];
    }

    /**
     * @return BelongsTo
     */
    public function father(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'father_id');
    }

    /**
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(__CLASS__, 'father_id', 'id');
    }
}
