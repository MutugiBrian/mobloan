<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use App\LoanType;
use App\Loan;

class AdminController extends Controller
{
    //
     public function __construct()
    {
    
     $this->middleware('auth');
    
    }

    public function storeimage($file){

        if($file == null){
            return null;
        }else{

        $filefullname = $file->getClientOriginalName();
        $filename = pathinfo($filefullname, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $storename = $filename.'_'.time().'.'.$extension;
        //upload image
        $path = $file->storeAs('public/images',$storename);
        
        return $storename;
        }
        
    }
    
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
            'loans'=>Loan::get()
           );
        return view('admin.manageloans')->with($data);
    }

    public function settings(){
        $data = array(
            'navbar'=>'admin',
            'pagename'=>'settings',
            'loan_types'=>LoanType::where('deleted',FALSE)->get()
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

    public function createloantype(request $form){
        $this->validation($form, 'loantype');
        $loantype = $form->toArray();

        if($form->file('imageurl') !== null && $form->file('imageurl')->getClientOriginalName() !== ''){
            $loantype['image'] = $this->storeimage($form->file('imageurl'));
            unset($loantype['imageurl']);
            
        }else{
            unset($loantype['imageurl']);
        }

            if(LoanType::create($loantype)){
            return back()->with('success', 'Loan Type Created Successfully');
            }else{
                return back()->with('error', 'Error creating loan type');  
            }
    }

    public function updateloantype(request $form){
        $this->validation($form, 'update_loantype');
        $loantype = $form->toArray();
        $id = $loantype['id']; 
        unset($loantype['id']);
        unset($loantype['_token']);

        if($form->file('imageurl') !== null && $form->file('imageurl')->getClientOriginalName() !== ''){
            $loantype['image'] = $this->storeimage($form->file('imageurl'));
            unset($loantype['imageurl']);
            
        }else{
            unset($loantype['imageurl']);
        }

            if(LoanType::where('id', $id)->update($loantype)){
            return back()->with('success', 'Loan Type updated Successfully');
            }else{
                return back()->with('error', 'Error updating loan type');  
            }
    }

    public function deleteloantype($id){

        if(LoanType::where('id', $id)->update([
            'deleted'=>TRUE
        ])){
            return back()->with('success', 'Industry Deleted');
        }else{
            return back()->with('error', 'Error Deleting');  
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

        if ($type == 'loantype') {
            return $this->validate($form, [
                'name' => 'required|max:255',
                'imageurl' => 'required',
                'description' => 'required|max:255',
            ]);
        }

        if ($type == 'update_loantype') {
            return $this->validate($form, [
                'name' => 'required|max:255',
                'description' => 'required|max:255',
            ]);
        }
    }

}
