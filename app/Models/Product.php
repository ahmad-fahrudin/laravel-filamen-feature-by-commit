<?php

namespace App\Models;

use App\Models\Gula;
use App\Models\Sembako;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sembakos()
    {
        return $this->hasMany(Sembako::class);
    }

    public function gulas()
    {
        return $this->hasMany(Gula::class);
    }
}
