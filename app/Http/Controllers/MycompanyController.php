<?php

namespace App\Http\Controllers;

use App\Models\Allowcompanythings;
use App\Models\Mycompanyauthority;
use App\Models\Mycompanylogos;
use App\Models\Mycompanyembededcode;
use App\Models\Mycompany;
use Illuminate\Http\Request;


class MycompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mycompany = Mycompany::all(); 
        return view('backend.mycompany');
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
        $mycompany=new Mycompany();
        //mycompanyinfo
        $mycompany->mycompanyinfo_domain=$request->companyinfodomain;
        $mycompany->mycompanyinfo_campany_name=$request->companyinfoname;
        $mycompany->mycompanyinfo_discription=$request->companyinfodescription;
        $mycompany->mycompanyinfo_timezone=$request->companyinfotimeZone;

        $mycompany->save();
        $companyid=$mycompany->id;
        //allowmycompanythings
        $companythings=new Allowcompanythings();
        $companythings->allowmycompanythings_Save_card=$request->saveCustomerCardForLaterCharges;
        $companythings->allowmycompanythings_Charge_client_percentage=$request->percentageToChargeAtBookingTime;
        $companythings->allowmycompanythings_Send_email=$request->newBookingEmail;
        $companythings->allowmycompanythings_Send=$request->newBookingSmsNumber;
        $companythings->allowmycompanythings_send_Confirmation_Email_to_user=$request->automaticallySendClientConfiramtionEmail;
        $companythings->allowmycompanythings_send_Confirmation_sms_to_user=$request->automaticallySendClientConfiramtionSms;
        $companythings->allowmycompanythings_When_user_send_contact=$request->customerContactFormEmail;
        $companythings->allowmycompanythings_Source_email=$request->custommerCommunicationEmail;
        $companythings->allowmycompanythings_Company_name=$request->customerEmailCompanyName;
        $companythings->allowmycompanythings_Company_address=$request->customerEmailCompanyAddress;
        $companythings->allowmycompanythings_Additional_address=$request->customerEmailCompanyAdditionalAddress;
        $companythings->allowmycompanythings_Driver_Email=$request->automaticallySendDriverConfiramtionEmail;
        $companythings->allowmycompanythings_Driver_SMS=$request->automaticallySendDriverConfiramtionSms;
        $companythings->allowmycompanythings_Client_Email=$request->automaticallySendDriverInfoToCustomerByEmail;
        $companythings->allowmycompanythings_Client_SMSrequest->automaticallySendDriverInfoToCustomerBySms;
        $companythings->allowmycompanythings_bid_Email=$request->automaticallySendDriverBidInvitationemail;
        $companythings->allowmycompanythings_bid_sms=$request->automaticallySendDriverBidInvitationSms;
        $companythings->allowmycompanythings_reminder_to_the_Customer=$request->minutesBeforeBookingClientReminder;
        $companythings->allowmycompanythings_Email_reminder_Customer=$request->automaticallySendClientReminderEmail;
        $companythings->allowmycompanythings_sms_reminder_Customer=$request->automaticallySendClientReminderSms;
        $companythings->allowmycompanythings_reminder_to_the_Driver=$request->minutesBeforeBookingDriverReminder;
        $companythings->allowmycompanythings_Email_reminder_Driver=$request->automaticallySendDriverReminderEmail;
        $companythings->allowmycompanythings_sms_reminder_Driver=$request->automaticallySendDriverReminderSms;
        $companythings->allowmycompanythings_finished_booking_driver_review=$request->automaticallyAskForDriverReview;
        $companythings->mycompanyinfo_id=$companyid;
        //mycompanyauthority
        $authority=new Mycompanyauthority();
        $authority->mycompanyauthority_cancel_booking_time=$request->minimumFreeCancelTimeInMinutes;
        $authority->mycompanyauthority_Booking_address_defined_reigon=$request->allowBookingOnlyOnDefinedRegions;
        $authority->mycompanyauthority_Booking_address_worldwide=$request->allowBookingworldwide;
        $authority->mycompanyauthority_TxtToLocal_username=$request->txtToLocalUsername;
        $authority->mycompanyauthority_TxtToLocal_key=$request->txtToLocalApiKey;
        $authority->mycompanyauthority_Twilio_account=$request->twilioAccount;
        $authority->mycompanyauthority_Twilio_token=$request->twilioToken;
        $authority->mycompanyauthority_From_number=$request->fromSmsNumber;
        $authority->mycompanyauthority_Google_Maps_Api_keys=$request->useClientGoogleApiKeys;
        $authority->mycompanyauthority_Payment_Info_Currency=$request->currency;
        $authority->mycompanyauthority_Payment_method=$request->allowCashAsPaymentMethod;
        $authority->mycompanyauthority_Stripe_public_key=$request->stripeWebsiteKey;
        $authority->mycompanyauthority_Stripe_server_key=$request->stripeServerKey;
        $authority->mycompanyauthority_PayPal_Client_ID=$request->paypalClientId;
        $authority->mycompanyauthority_PayPal_Client_Secret=$request->paypalClientSecret;
        $authority->mycompanyinfo_id=$companyid;
        //mycompanylogos
        $companylogos=new Mycompanylogos();
        if($request->adminlogo){
            $file = $request->file('adminlogo');
            $input['adminlogo'] = $file->getClientOriginalName();
            $file->move(public_path('images/mycompany/admin'),$file->getClientOriginalName());
            $companylogos->mycompanylogos_Admin_Logo=$input['adminlogo'];
            }else{
            $companylogos->mycompanylogos_Admin_Logo="No";
        }
        if($request->loginlogo){
            $file = $request->file('loginlogo');
            $input['loginlogo'] = $file->getClientOriginalName();
            $file->move(public_path('images/mycompany/login'),$file->getClientOriginalName());
            $companylogos->mycompanylogos_Login_Register_Logo=$input['loginlogo'];
            }else{
            $companylogos->mycompanylogos_Login_Register_Logo="No";
        }
        if($request->invoicelogo){
            $file = $request->file('invoicelogo');
            $input['invoicelogo'] = $file->getClientOriginalName();
            $file->move(public_path('images/mycompany/invoice'),$file->getClientOriginalName());
            $companylogos->mycompanylogos_Invoice_Logo=$input['invoicelogo'];
            }else{
            $companylogos->mycompanylogos_Invoice_Logo="No";
        }
        





        // mycompanyembededcode
        $companyembededcode=new Mycompanyembededcode();
        // $companyembededcode->mycompanyembededcode_Direct_booking_link=$request->;
        // $companyembededcode->mycompanyembededcode_IFrame_Integration=$request->;
        $companyembededcode->mycompanyembededcode_Phone=$request->mycompanyembededcodephone;
        $companyembededcode->mycompanyembededcode_Initial_GPS_Coordinates=$request->mycompanyembededcodegpsCoordinates;
        // $companyembededcode->mycompanyembededcode_Terms_Cond=$request->;
        $companyembededcode->mycompanyembededcode_Custom_CSS=$request->customCss;
        $companyembededcode->mycompanyinfo_id=$companyid;
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mycompany  $mycompany
     * @return \Illuminate\Http\Response
     */
    public function show(Mycompany $mycompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mycompany  $mycompany
     * @return \Illuminate\Http\Response
     */
    public function edit(Mycompany $mycompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mycompany  $mycompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mycompany $mycompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mycompany  $mycompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mycompany $mycompany)
    {
        //
    }
}
