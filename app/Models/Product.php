<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
    use  HasFactory, Translatable;

    public $translatedAttributes = ['name', 'model', 'description'];
    // protected $fillable = ['author'];
    public function infos()
    {
        return $this->hasMany(ProductInfo::class);
    }
    //     protected $fillable=[
    // 'name',
    // 'model',
    // 'weight',
    // 'price',
    // 'discount',
    // 'description',
    // 'final_quantity',
    //     ];
    protected $fillable = [
        'weight',
        'price',
        'discount',
        'final_quantity',
        '7mada'
    ];
}