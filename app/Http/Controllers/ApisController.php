<?php

namespace App\Http\Controllers;
use App\User;
use App\Loan;
use App\LoanType;

use Illuminate\Http\Request;

class ApisController extends Controller
{
    public function allloans(){
        $response = [
            'data' => Loan::get()
        ];
        return response()->json($response,200);
    }

    public function liveloans($id){
        $loans = Loan::where('loan_type',$id)->where('deleted',FALSE)->get();
        foreach ($loans as $loan) {
            $loan->lender_logo = User::where('id',$loan->lender)->value('logo');
        }
        $response = [
            'data' => $loans
        ];
        return response()->json($response,200);
    }

    public function lenders(){
        $response = [
            'data' => User::where('role','lender')->get()
        ];
        return response()->json($response,200);
    }

    public function lenderloans($id){
        $response = [
            'data' => Loan::where('lender',$id)->get()
        ];
        return response()->json($response,200);
    }
}
