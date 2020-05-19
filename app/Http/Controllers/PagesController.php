<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SiteSetting;
use App\Loan;
use App\LoanType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Session;
use Mail;

class PagesController extends Controller
{
    //
    public function index(){
        $auth = Auth::user();

        if(Auth::user()){

        if(Auth::user()->role== 'admin' ){

           return redirect('/admin');

        }
        elseif(Auth::user()->role == 'lender' ){

           return redirect('/lender');

        }
        elseif(Auth::user()->user_type == 'Company' ){

           return redirect('/company');

        }else{

            return view('landing');
        
        }

    }else{
        return view('landing');
    }
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
    
    public function register(){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'Lender registration',
           );
        return view('register')->with($data);
    }

    public function registersuccess($email){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'Lender registered',
            'email'=>$email
           );
        return view('registered')->with($data);
    }

    public function postregister(request $form){
        $this->validation($form, 'create_user');
        $user = $form->toArray();
        $user['password'] = Hash::make($user['password']);
        $user['verification_code'] = Str::random(30);
        
        if($form->file('imageurl') !== null && $form->file('imageurl')->getClientOriginalName() !== ''){
            $user['logo'] = $this->storeimage($form->file('imageurl'));
            unset($user['imageurl']);
            
        }else{
            unset($user['imageurl']);
            $user['logo'] = '';
        }

            if(User::create($user)){
                $site = SiteSetting::where('status','active')->first();
                $sitename = $site->sitename ?? config('app.name');
                $user['sitename'] = $sitename;
                
                Mail::send('mail.verification', $user, function ($message) use ($user) {
                    $message->to($user['email']);
                    $message->subject($user['sitename']." Activation");
                });
                // if($mailsent){
                return redirect('/register/success/'.$user["email"]);
        
           // return back()->with('success', 'Registration Successful');
            }else{
                return back()->with('error', 'Error registering');  
            }
    }

    public function verify($link)
    {

        $now = Carbon::now()->toDateTimeString();

        $accountverified = User::where('verification_code', $link)->update([
            'verified' => true,
            'email_verified_at' => $now
        ]);



        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'Lender verified',
        );
        return view('verified')->with($data);
    }

    public function login(){
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'login',
           );
        return view('login')->with($data);
    }

    public function postlogin(request $form){
        Auth::logout();
        Session::flush();
        
        $this->validation($form, 'login');

        $user = $form->toArray();

        $credentials = array(
            'email'=>$user['email'],
            'password'=>$user['password'],
        );

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $usertype = Auth::user()->role;
            $verified = Auth::user()->verified;

            if($verified != 1){

                Auth::logout();
                Session::flush();

                return back()->with('error', 'Please verify your email');
                
            }else{
            
            if($usertype == 'admin'){

                return redirect('/admin');

            }
            elseif($usertype == 'lender')
            {

                return redirect('/lender');

            }
            else{

                Auth::logout();
                Session::flush();

                return back()->with('error', 'UNKNOWN USER TYPE');
                
            }

            }

            
        }else{
            return back()->with('error', 'Wrong username or password.');
        }
        
    }

    public function loans(){
        $loan_types = LoanType::where('deleted',FALSE)->get();
        foreach ($loan_types as $loan_type) {
            $loan_type->loans = Loan::where('loan_type',$loan_type->id)->count();
        }
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'loans',
            'loan_types'=>$loan_types
           );
        return view('loans')->with($data);
    }

    public function compare($id){
        $loans = Loan::where('loan_type',$id)->where('deleted',FALSE)->get();
        foreach ($loans as $loan) {
            $loan->lender_logo = User::where('id',$loan->lender)->value('logo');
        }
        $data = array(
            'navbar'=>'transparent',
            'pagename'=>'car loan',
            'loans'=>$loans
           );
        return view('compare')->with($data);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function validation($form, $type)
    {
        if ($type == 'create_user') {

            return $this->validate($form, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'imageurl' => 'required|max:255',
                'address' => 'required|max:255',
                'phone' => 'required|max:255',
                'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
        }

        if ($type == 'login') {
            return $this->validate($form, [
                'email' => 'required|email|max:255|exists:users,email',
                'password_confirmation' => 'min:6'
            ]);
        }
    }



}
