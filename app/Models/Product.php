<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'description', 'price', 'photo', 'subcategory_id '];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function getImageUrlAttribute()
    {
        return route('productos.photo', ['id' => $this->id]);
    }

}
