<?php

namespace App\Http\Controllers;
use App\User;
use App\Loan;
use App\LoanType;

use Illuminate\Http\Request;

class ApisController extends Controller
{
    public function allloans(){
        $loans = Loan::where('deleted',FALSE)->get();
        foreach ($loans as $loan) {
            $loan->lender_logo = User::where('id',$loan->lender)->value('logo');
            $loan->lender_name = User::where('id',$loan->lender)->value('name');
            $loan->loan_type_name = LoanType::where('id',$loan->loan_type)->value('name');
        }
        $response = [
            'data' => $loans
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
        $lenders = User::where('role','lender')->where('deleted',FALSE)->get();
        foreach ($lenders as $lender) {
            $lender->loans = Loan::where('lender',$lender->id)->count();
        }
        $response = [
            'data' => $lenders
        ];
        return response()->json($response,200);
    }

    public function lenderloans($id){
        $loans = Loan::where('lender',$id)->where('deleted',FALSE)->get();
        foreach ($loans as $loan) {
            $loan->loan_type_name = LoanType::where('id',$loan->loan_type)->value('name');
        }
        $response = [
            'data' => $loans
        ];
        return response()->json($response,200);
    }
}
