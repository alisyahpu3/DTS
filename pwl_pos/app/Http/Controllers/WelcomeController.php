<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $breadcrumb=(object)[
            'title'=>'welcome',
            'list'=>['home','welcome']
        ];
        $activeMenu='dashboard';
    return view ('welcome',['breadcrumb'=>$breadcrumb,'activeMenu'=>$activeMenu]);
    }

}
