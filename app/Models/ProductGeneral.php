<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGeneral extends Model
{
    use HasFactory;

    protected $fillable = ['product_gallery_pic'];

    public function attributeItems()
    {
        return $this->hasMany(AttributeItem::class);
    }
    public function productImageItems()
    {
        return $this->hasMany(ProductImageItem::class, 'product_generals_id', 'id');
     
    }
}
