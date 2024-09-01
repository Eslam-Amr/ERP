<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function infos(){
        return $this->hasMany(ProductInfo::class);

    }
    protected $fillable=[
'name',
'model',
'weight',
'price',
'discount',
'description',
'final_quantity',
    ];
}
