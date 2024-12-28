<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImageItem extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======


>>>>>>> 08aa241e9720285d64bce8430d5709e2d79eda7a
    public function images()
    {
        return $this->hasMany(ProductGeneral::class);
    }
}
