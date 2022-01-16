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
    public function info($userId)
    {
        $service = new LibraryService();
        return $service->getLibrary($userId);
    }
    /**
    * Добавляет продукт в библиотеку
    * @param Request request
    * @return array
    */

    public function addToLibrary(Request $request)
    {
        $service = new LibraryService();
        $service->addToLibrary($request->get('$productId'), $request->get('userId'));

        return [
            'inLibrary'=> true
        ];
    }
}
