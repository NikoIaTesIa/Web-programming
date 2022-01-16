<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    /**
     * Список пользователей.
     * @return Collection
     */
    public function list()
    {
        return User::query()->get();
    }

    /**
     * Информация о пользователе
     * @param $id
     * @return Model|object
     */
    public function info($id)
    {
        return User::query()->where(['id' => $id])->first();
    }

     public function authorization(Request $request)
     {
         $query_res = User::query()->where(['name' => $request->get('name')])->first();
         if ($query_res == NULL) {
             return ['userId'=> 0];
         }
         else if ($query_res['password'] == $request->get('password')) {
                 return ['userId'=> $query_res['id']];
             }
             else { return ['userId'=> 0]; }
     }
}

