<?php

namespace App\Domain\Library\Services;
use App\Domain\Product\Models\Product;
use App\Domain\Library\Models\UserProduct;

class LibraryService
{
    public function addToLibrary($userId, $productId)
    {
        $user = User::query()->where(['userId' => $userId])->first();
        $user_product = UserProduct::query()->where(['userId' => $userId])->first();
        $product = Product::query()->where(['id' => $productId])->first();

        if ($user_product === NULL)
        {
            UserProduct::create([
                'userId' => $user->id,
                'productId' => $product->id,
            ]);
        }
    }
}
