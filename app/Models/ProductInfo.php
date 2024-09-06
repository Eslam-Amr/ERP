<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;
        protected $fillable=[
    'product_id',
    'color_en',
    'color_ar',
    'quantity',
        ];
    public function getColorAttribute()
    {
        $locale = app()->getLocale(); // Get the current locale
        $column = 'color_' . $locale;

        return $this->$column ?? $this->color_en; // Fallback to default
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
//     protected $fillable=[
// 'product_id',
// 'color',
// 'quantity',
//     ];
}
