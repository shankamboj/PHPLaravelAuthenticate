<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class authenticate extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function login()
    {
        // $name = $request->name;
  
        return view("login");
    }
    public function register()
    {
        // $name = $request->name;
  
        return view("register");
    }
    public function registersubmit(Request $request)
    {
        $username = $request->login;
        $password = $request->password;
        
        $id = DB::table('users')->max('id');
        $id = $id+1;
        // dd($price);
        // DB::table('users')->insert($data);
        DB::table('users')->insert(
            ['id' =>$id, 'username' =>  $username, 'password' => $password ]
        );
        echo "Register Successfull";
        
    }
     public function loginsubmit(Request $request)
    {
      
        $username = $request->login;
        $password = $request->password;
        $users = DB::table('users')->where(['username'=>  $username,'password'=>  $password ])->get();
        // dd($users);
        if(sizeof($users)>0)
        {
            session(['token' => $username]);
            echo "Login Successfull";
        }
        else
        {
            echo "login failed";
        }
    }
 
}
