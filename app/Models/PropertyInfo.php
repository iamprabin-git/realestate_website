<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyInfo extends Model
{
   /**
    * Get the property that owns the PropertyInfo
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function property(): BelongsTo
   {
       return $this->belongsTo(Property::class);
   }
}
