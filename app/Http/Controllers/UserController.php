<?php

namespace App\Http\Controllers;

use App\Models\User;
use Ramsey\Uuid\Guid\Guid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function returnAllUsersView(){
        $myName = $this->getMyVar();
        $allUsers = $this->getUsers();
        $usersFromDB = $this->getUsersFromDB();

        $myTeamLeader = DB::table('users')->where('id',6)->first();

        return view('users.all_users', compact('myName','allUsers', 'usersFromDB'));
    }

    public function returnAddUserView(){

        return view('users.add_user');
    }

    public function insertUserIntoDB(){
        DB::table('users')
        ->insert([
            'name' => 'Raquel',
            'email' => 'Raquel@gmail.com',
            'password' => 'Raquel12345',
        ]);

        return response()->json('user inserido');

    }

    public function updateUserIntoDB(){
        Db::table('users')
        ->where('id', 4)
        ->update([
            'name' =>'Ruben',
            'updated_at' => now()
        ]);

        return response()->json('user actualizado com sucesso');
    }

    public function deleteUserFromDB(){

        DB::table('users')
        ->where('email', 'Sara2@gmail.com')
        ->delete();

        return response()->json('user apagado com sucesso');
    }

    public function deleteUser($id){
        DB::table('tasks')
        ->where('user_id', $id)
        ->delete();


        DB::table('users')
        ->where('id', $id)
        ->delete();

        return back();
    }

    public function viewUser($id){
        $ourUser = DB::table('users')
        ->where('id', $id)
        ->first();

        return view('users.view_user', compact('ourUser'));

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

    private function getUsersFromDB(){
        $usersFromDB =
       User::get();

        return $usersFromDB;
    }


}
