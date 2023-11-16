<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'shortDescription',
        'description',
        'manufacturer',
        'adult',
        'itemType',
        'url',
        'visible',
    ];

   protected $hidden = [];

   public static function createProduct($product, $eshop_id, $tenant_id):Product {

       return Product::create([
            'product_id' => $product->product_id,
            'name' => $product->name,
            'shortDescription' => $product->shortDescription,
            'description' => $product->description,
            'manufacturer' => $product->manufacturer,
            'adult' => $product->adult,
            'itemType' => $product->itemType,
            'url' => $product->url,
            'visible' => $product->visible,
            'eshop_id' => $eshop_id,
            'tenant_id' => $tenant_id,
       ]);
   }

}
