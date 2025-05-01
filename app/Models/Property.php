<?php

namespace App\Models;

use App\Models\PropertyInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    protected $casts = [
        "images" => "array"
    ];
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
    /**
     * Get all of the property_infos for the Property
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function property_infos(): HasMany
    {
        return $this->hasMany(PropertyInfo::class);
    }
}
