<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    
    public function home(){
        $data = array(
            'navbar'=>'admin',
            'pagename'=>'admin',
           );
        return view('admin.home')->with($data);
    }

}
