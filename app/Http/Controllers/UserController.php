<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

class UserController extends Controller
{
    public function returnAllUsersView(){
        $myName = $this->getMyVar();
        $allUsers = $this->getUsers();


        return view('users.all_users', compact('myName','allUsers'));
    }

    public function returnAddUserView(){

        return view('users.add_user');
    }

    private function getMyVar(){
        $myName = 'Sara';

        return $myName;
    }

    private function getUsers() {
        $users = [
            ['id' => 1, 'name' =>'Sara', 'email' => 'sara@gmail.com'],
            ['id' => 2, 'name' =>'Márcia', 'email' => 'Márcia@gmail.com'],
            ['id' => 3, 'name' =>'bruno', 'email' => 'bruno@gmail.com']
        ];

        return $users;
    }


}
