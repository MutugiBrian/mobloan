<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LenderController extends Controller
{
    //
    public function home(){
        $data = array(
            'navbar'=>'lender',
            'pagename'=>'my loans',
           );
        return view('lender.home')->with($data);
    }

     public function createloan(){
        $data = array(
            'navbar'=>'lender',
            'pagename'=>'create loan',
           );
        return view('lender.createloan')->with($data);
    }

    public function editloan(){
        $data = array(
            'navbar'=>'lender',
            'pagename'=>'edit loan',
           );
        return view('lender.editloan')->with($data);
    }



}
