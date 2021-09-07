<?php

namespace App\Http\Controllers;

use App\Models\myltds;
use Illuminate\Http\Request;

class MyltdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myltds = myltds::all(); 
       return view('backend.myltds', compact('myltds'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $myltds=new Myltds;
         $myltds = Myltds::findOrNew($request->myltds_id);

        $myltds->company_name=$request->companyname;
        $myltds->company_street_address=$request->companystreetAddress;
        $myltds->company_additional_address=$request->companyadditionalAddress;
        $myltds->cmpany_city=$request->companycity;
        $myltds->company_zip_code=$request->companyzipCode;
        $myltds->company_coutry=$request->companycountry;
        $myltds->company_phone=$request->companyphone;
        $myltds->vat_number=$request->vatNumber;
        $myltds->vat_percentage=$request->vatPercentage;
        $myltds->bank_account_name=$request->bankaccountName;
        $myltds->bank_name=$request->bankName;
        $myltds->bank_account_iban=$request->bankiban;
        $myltds->bank_account_number=$request->bankaccountNo;
        $myltds->bank_account_short_code=$request->bankshortCode;

        $myltdssave=$myltds->save();
            if($myltdssave == 1) {
            $success = true;
            $message = "myltds Data Saved Successfully";
        } else {
            $success = false;
            $message = "Data not Saved Successfully";
        }
      return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\myltds  $myltds
     * @return \Illuminate\Http\Response
     */
    public function show(myltds $myltds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\myltds  $myltds
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $customer = Myltds::where($where)->first();
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\myltds  $myltds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, myltds $myltds)
    {
        //    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\myltds  $myltds
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myltds = myltds::where('id', '=', $id)->delete();
      
        if($myltds == 1) {
            $success = true;
            $message = "Owncar deleted successfully";
        } else {
            $success = false;
            $message = "Owncar not deleted";
        }
      return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
    
}
