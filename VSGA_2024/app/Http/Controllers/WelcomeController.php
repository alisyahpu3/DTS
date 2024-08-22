<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function hello(){
        return('HELLO WORLD');
    }
    public function greeting(){
        return view('blog.helloo',['name'=>'puput']);
    }
}
