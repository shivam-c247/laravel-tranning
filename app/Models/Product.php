<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable =  [
        'product_name','product_sub_name'
    ];



    /**
     * Get the product that owns the category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
