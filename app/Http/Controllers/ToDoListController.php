<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{


public  function postRegister(){
  return view('register');
}
public function submit (Request $request){
    $task = new Tasks();
    $task->title = $request->input('title');
    $task->save();
    return redirect()->route('/');
}
public  function getHome(){
    return view('home');
}
public  function getLogOut(){
        return view('home');
    }
public function signIn()
{
    return view('signin');
}
public function registerController(){
    return view('register');
}


}
