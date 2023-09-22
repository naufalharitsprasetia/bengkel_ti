<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Pembelian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function pembelians()
    {
        return $this->hasMany(Pembelian::class);
    }
}