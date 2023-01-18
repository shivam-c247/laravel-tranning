<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\AncientScope;

class Product extends Model
{
    use HasFactory;

    public function flight()
    {
        return $this->hasOne(Flight::class);
    }

    public function scopeSamsung($query)
    {
        return $query->where('title','!=', 'Samsung');
    }

    // protected static function booted()
    // {
    //     static::addGlobalScope(new AncientScope);
    // }

    protected static function booted()
    {
        static::addGlobalScope('ancient', function (Builder $builder) {
            $builder->where('created_at', '<', now()->subYears(1));
        });
    }
}
