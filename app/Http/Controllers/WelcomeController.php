<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
      $title = "Otema Technologies | The Home Of Digital Solutions and Innovations";
        return view ('welcome')->with(compact('title'));

}
public function about(){
  $title = "Otema Technologies | About Us";
        return view ('about')->with(compact('title'));
}
}
