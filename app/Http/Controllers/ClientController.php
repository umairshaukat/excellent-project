<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Company;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $clients=Client::all();
        return view('backend.clients.Clients',compact('clients'));
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


          $company = new Company;
          if($request->isCompany){
            $company->company_name=$request->companyName;
            $company->vat_number=$request->vatNumber;
            $company->street_address=$request->companyStreetAddress;
            $company->additional_address=$request->companyAdditionalAddress;
            $company->zip_code=$request->companyZipCode;
            $company->city=$request->companyCity;
            $company->cost_center=$request->costCenter;
            $company->save();
            $company_Id = $company->id;
          }
          $client = new Client;
          $client->first_name=$request->firstName;
          $client->last_name=$request->lastName;
          $client->phone_no=$request->phoneNumber;
          $client->email=$request->email;
          $client->discount=$request->discountPercentage;
          $client->gender=$request->userDetailsSalutation;
          $client->language=$request->culture;
          $client->payment_method=$request->creditCardSetting;
          $client->currency=$request->currency;



          // checkboxes
          // 1=for check 
          // 0=for uncheck
          if($request->showInstantPriceWhenBooking){
          $client->booking_price_instant=1;
          }
          if($request->carRegNo){
          $client->booking_price_never_show=1;
          }

          if($request->automaticallySendDriverInfoToCustomerByEmail){
          $client->send_driver_details_by_email=1;
          }

          if($request->automaticallySendDriverInfoToCustomerBySms){
          $client->send_driver_details_by_sms=1;
         }
          
          if($request->automaticallySendDriverArrivedEmail){
          $client->send_driver_gps_by_email=1;
            }

          if($request->automaticallySendDriverArrivedSms_by_gps){
            $client->send_driver_gps_by_sms=1;
          }

          if($request->isCompany){
            $client->account_status="comapny";
            $client->company_id=$company_Id;
            }else{

            $client->account_status="Personal";
            $client->company_id="0";
            }
          $clientdata=$client->save();   
            if($clientdata == 1) {
            $success = true;
            $message = "Clients has successfully Saved";
        }
        else {
            $success = false;
            $message = "Clients has not Saved";
        }

      return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $where = array('id' => $id);
        $customer = Client::where($where)->first();
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $company_id=Client::find($id);
        $company = Company::where('id', '=', $company_id->company_id)->delete();     
        $client = Client::where('id', '=', $id)->delete();
        if($client == 1) {
            $success = true;
            $message = "Driver deleted successfully";
        } else {
            $success = false;
            $message = "Driver not deleted";
        }
      return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
