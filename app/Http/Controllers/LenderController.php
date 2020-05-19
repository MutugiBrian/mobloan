<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\LoanType;

class LenderController extends Controller
{
     public function __construct()
    {
    
     $this->middleware('auth');
    
    }
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
            'loan_types'=>LoanType::where('deleted',FALSE)->get()
           );
        return view('lender.createloan')->with($data);
    }

    public function editloan($id){
        $loan = Loan::where('id',$id)->first();
        
        $data = array(
            'navbar'=>'lender',
            'pagename'=>'edit loan',
            'loan_types'=>LoanType::where('deleted',FALSE)->get(),
            'loan'=>$loan
           );
        return view('lender.editloan')->with($data);
    }

    public function postloan(request $form){
        $this->validation($form, 'loan');
        $loan = $form->toArray();
         if(isset($loan['admin_fee'])){
            $loan['admin_fee'] = 1;
        }else{
            $loan['admin_fee'] = 0;
        }
        if(isset($loan['salaried'])){
            $loan['salaried'] = 1;
        }else{
            $loan['salaried'] = 0;
        }
        if(isset($loan['security'])){
            $loan['security'] = 1;
        }else{
            $loan['security'] = 0;
        }

            if(Loan::create($loan)){
               return redirect('/lender')->with('success', 'Loan created Successfully');
            }else{
                return back()->with('error', 'Error creating loan');  
            }
    }

    public function posteditloan(request $form){
        $this->validation($form, 'loan');
        $loan = $form->toArray();
        $id = $loan['id'];
        if(isset($loan['admin_fee'])){
            $loan['admin_fee'] = 1;
        }else{
            $loan['admin_fee'] = 0;
        }
        if(isset($loan['salaried'])){
            $loan['salaried'] = 1;
        }else{
            $loan['salaried'] = 0;
        }
        if(isset($loan['security'])){
            $loan['security'] = 1;
        }else{
            $loan['security'] = 0;
        }
        unset($loan['_token']);
        unset($loan['id']);
        unset($loan['submit']);
        
        if(Loan::where('id', $id)->update($loan)){
        return redirect('/lender')->with('success', 'Loan Updated Successfully');
        }else{
            return back()->with('error', 'Error updating loan');  
        }
    }

    public function validation($form, $type)
    {
        if ($type == 'loan') {

            return $this->validate($form, [
                'loan_type' => 'required|numeric|exists:loan_types,id',
                'lender' => 'required|numeric|exists:users,id',
                'interest' => 'required|max:255',
                'minimum_amount' => 'required|max:255',
                'maximum_amount' => 'required|max:255',
                'minimum_duration' => 'required|max:255',
                'maximum_duration' => 'required|max:255',
                'application_link' => 'required|max:255',
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
