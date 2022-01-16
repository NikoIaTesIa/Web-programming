<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public $users = array(
        [
        'id' => 1,
        'login' => 'Administrator',
        'password' => 'root'
         ],
        [
        'id' => 2,
        'login' => 'NicolaTesla',
        'password' => '123'
        ],
        [
        'id' => 3,
        'login' => 'GermanChubov',
        'password' => '12345'
        ]
        );

     /**
     * Список пользователей
     * @return array[]
     */
     public function list()
     {
         return $this->users;
     }

     /**
     * Информация о пользователе
     * @param $id
     * @return array
     */
     public function info($id)
     {
         return  $this->users[$id-1];
     }

     public function authorization(Request $request)
     {
         if ( !empty($request['password']) and !empty($request['login']) ) {
             foreach ($this->users as $user) {
                 if ($user['login'] == $request->get('login') && $user['password'] == $request->get('password')) {
                     return [
                         'userId'=> $user['id']
                     ];
                 }
             }

             return [
                 'userId'=> 0
             ];
         }
     }
}
