<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributeType extends Model
{
    use HasFactory;

    // ProductAttributeType.php

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class, 'id');
    }
}
