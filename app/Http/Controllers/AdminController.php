<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;

class AdminController extends Controller
{
    //

    
    public function home(){
        $data = array(
            'navbar'=>'admin',
            'pagename'=>'admin home',
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

    public function updatesettings(request $form){
        $this->validation($form, 'settings');

        $settings = SiteSetting::where('id', 1)->first();
        $newsettings = $form->toArray();

        if($settings){
            unset($newsettings['_token']);
            if(SiteSetting::where('id', 1)->update($newsettings)){
            return back()->with('success', 'Settings Updated Successfully');
            }else{
                return back()->with('error', 'Error updating settings');  
            }
        }else{
            unset($newsettings['status']);
            $newsettings['status'] = 'active';
            if(SiteSetting::create($newsettings)){
            return back()->with('success', 'Settings Created Successfully');
            }else{
                return back()->with('error', 'Error creating settings');  
            }
            
        }
    }

    public function validation($form, $type)
    {
        if ($type == 'settings') {

            return $this->validate($form, [
                'sitename' => 'required|max:255',
                'adminemail' => 'required|max:255',
                'terms' => 'required'
            ]);
        }
    }

}
