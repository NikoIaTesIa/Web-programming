<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

/**
* Контроллер для управления продуктами
*/
class ProductController extends Controller
{
    public $products = [];

    public function init()
    {
        $this->products = Product::query()->get();
    }

    /**
     * Список продуктов
     * @return array
     */
    public function list()
    {
        $this->init();
        return $this->products;
    }

    /**
     * Информация о продукте
     * @param $id
     * @return array
     */
    public function info($id)
    {
        $this->init();
        return  $this->products[$id-1];
    }
}
