<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
   public function contact(Request $request){
       if($request->isMethod('post')){

       }
       $title = "Otema Technologies | Contact Us";

       return view('contact')->with(compact('title'));
   }
}
