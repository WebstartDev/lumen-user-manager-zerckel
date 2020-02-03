<?php
namespace App\Http\Controllers;

use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function showAllUsers()
    {
        $data = DB::select("SELECT * FROM users");
        return view('users', ['data' => $data]);
    }

    public function showUser($id){
        $data = DB::select("SELECT * FROM users WHERE id =". + $id);
        return view('user', ['user' => $data]);
    }

    public function createUser(){
        var_dump($_POST);
        DB::table('users')->insert(
            ['email' => $_POST['email'], 'last_name' =>  $_POST['lastname'], 'first_name' =>  $_POST['firstname'], 'password' =>  md5($_POST['password']) ]
        );
        $data = DB::select("SELECT * FROM users");
        return view('users', ['data' => $data]);
    }

    public function deleteUser(){

        echo 'totoo';
    }

}
