<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
   { $breadcrumb =(object)[
    'title'=>'welcome',
    'list'=>['Home','Welcome']
    ];
    $activeMenu ='dashboard';
    return view('welcome',['breadcrumb'=>$breadcrumb,'activeMenu'=>$activeMenu]);
}
}