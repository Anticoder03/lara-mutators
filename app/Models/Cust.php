<?php

namespace App\Models;   
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Cust extends Model
{
    //  use HasFactory;
    //
     protected function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucwords(strtolower($value)), // Accessor - when reading
            set: fn ($value) => strtoupper($value),         // Mutator - when saving
        );
    }
}
