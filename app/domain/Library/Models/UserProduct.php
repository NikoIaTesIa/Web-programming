<?php

namespace App\Domain\Library\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Product\Models\Product;

class UserProduct extends Model
{
    protected $table = 'users_products';

        protected $fillable = [
            'userId',
            'productId',
        ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'productId');
    }
}
