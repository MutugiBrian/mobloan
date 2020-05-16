<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    
    public function home(){
        $data = array(
            'navbar'=>'admin',
            'pagename'=>'adminhome',
           );
        return view('admin.home')->with($data);
    }

    public function manageloans(){
        $data = array(
            'navbar'=>'admin',
            'pagename'=>'manageloans',
           );
        return view('admin.manageloans')->with($data);
    }

     public function settings(){
        $data = array(
            'navbar'=>'admin',
            'pagename'=>'settings',
           );
        return view('admin.settings')->with($data);
    }

}
