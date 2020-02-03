<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class apiController extends Controller
{
    public function getAllUser(){
        return DB::select("SELECT * FROM users");
    }
    public function getUser($id){
        return DB::select("SELECT * FROM users WHERE id =". $id);
    }
}
