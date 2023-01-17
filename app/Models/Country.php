<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;


     /**
     * Get the User's Country.
     */
    public function userCountry()
    {
        return $this->hasOneThrough(
            User::class,
            state::class,
            'country_id', // Foreign key on the cars table...
            'state_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }
}
