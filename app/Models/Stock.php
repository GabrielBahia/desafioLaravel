<?php

namespace App\Models;

use App\Models\ProductsStock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = ['quantidade'];

    public function productsStock()
    {
        return $this->belongsToMany(ProductsStock::class);
    }
}