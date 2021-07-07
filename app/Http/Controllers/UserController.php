<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;

class UserController extends Controller
{
    public function SignUp(Request $request){
        $username = $request['username'];
        $email = $request['email'];
        $password = $request['password'];

    $user = new User();

        $user -> username = $username;
        $user -> email = $email;
        $user -> password = $password;

    $user -> save();
    }
    public function SignIn(Request $request){
        $email = $request['email'];
        $password = $request['password'];
    }
}
