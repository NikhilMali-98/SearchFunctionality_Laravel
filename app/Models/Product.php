<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture','title','price','description'
    ];
    
    public function Product()
    {
            return $this->hasMany(Product::class);
        }
}
