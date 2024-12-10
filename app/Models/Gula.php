<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gula extends Model
{
    protected $guarded = [];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
