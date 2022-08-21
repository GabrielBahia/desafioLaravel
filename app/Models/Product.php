<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sabor', 'preco', 'descricao', 'foto'];

    public function stocks()
    {
        return $this->belongsToMany(Stock::class);
    }
}
