<?php

namespace App\Http\Controllers;

use App\Domain\Library\Services\LibraryService;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
/**
* Контроллер для управления корзиной
*/
class LibraryController extends Controller
{
    /**
    * Добавляет продукт в библиотеку
    * @param Request request
    * @return array
    */

    public function addToLibrary(Request $request)
    {
        $service = new LibraryService();
        $service->addToLibrary($request->get('userId'), $request->get('$productId'));

        return [
            'inLibrary'=> true
        ];
    }
}
