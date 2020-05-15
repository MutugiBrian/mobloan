<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function register(){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'Lender registration',
           );
        return view('register')->with($data);
    }

    public function login(){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'login',
           );
        return view('login')->with($data);
    }

    public function loans(){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'loans',
           );
        return view('loans')->with($data);
    }

    public function compare(){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'car loan',
           );
        return view('compare')->with($data);
    }



}
