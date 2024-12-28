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
<<<<<<< HEAD
    public function productImageItems()
    {
        return $this->hasMany(ProductImageItem::class, 'product_generals_id', 'id');
     
    }
=======


    public function productImageItem()
{
    return $this->belongsTo(ProductImageItem::class, 'product_generals_id');
}
>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
}
