<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Driver_car;
use App\Models\Driver_Payment;
use App\Models\Driver_license;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\File;
 use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Config;
use Response;

class DriverController extends Controller
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
        return view('backend.drivers');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.drivers.adddriver');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $account = new Driver;
          $account->first_name = $request->firstName;
          $account->last_name = $request->lastName;
          $account->phone_no = $request->phoneNumber;
          $account->email = $request->email;
          $account->d_o_b = $request->dob;
          $account->time_zone = $request->timezone;
          $account->image = $request->firstName;
          $account->gender = $request->gender;
          $account->nationality = $request->nationality;
          $account->preferred_service = $request->selectedCarType;
          $account->driver_licence_type = $request->driverLicenceType;
          $account->add_info_disp = $request->add_info_disp;
          $account->add_info_client = $request->add_info_client;
          $account->address_discription = $request->address_description;
          $account->language = $request->lang;
          $account->driver_status = "pending";
          if($request->driver_img){
            $file = $request->file('driver_img');
            $input['driver_img'] = $file->getClientOriginalName();
            $file->move(public_path('images/driver/profiles'),$file->getClientOriginalName());
            $account->image=$input['driver_img'];
            }else{
            $account->image="No";
        }
          $account->save();
          // driver car details save
          $driver_Id = $account->id;
          $driver_car = new Driver_car;
          $driver_car->driver_id=$driver_Id;
          $driver_car->car_brand=$request->carBrand;
          $driver_car->car_model=$request->carModel;
          $driver_car->car_color=$request->carColor;
          $driver_car->car_no_plate=$request->carRegNo;
          $driver_car->driver_licence_no=$request->driverLicenseNumber;
          $driver_car->coverd_area=$request->covered_areas;
          $driver_car->save();
          // driver car payment details save
          $driver_payment = new Driver_Payment;
          $driver_payment->driver_id=$driver_Id;
          $driver_payment->currency=$request->currency;
          $driver_payment->account=$request->paymentAccount;
          $driver_payment->payment_method=$request->paymentMethod;
          $driver_payment->payment_period=$request->paymentPeriod;
          $driver_payment->payment_status=$request->carBrand;
          $driver_payment->widral_status=$request->carBrand;
          $driver_payment->total=0;
          $driver_payment->save();
          // driver car payment details save

          $driver_licenses = new Driver_license;
          $driver_licenses->driver_id=$driver_Id;
          $driver_licenses->driver_licence_exp_date=$request->documentDate;
          $driver_licenses->doc_no=$request->documentNumber;
          $driver_licenses->pco_licence_exp_date=$request->pco_documentDate;
          $driver_licenses->pco_doc_no=$request->pco_documentNumber;
          $driver_licenses->insurance_no=$request->insurancedocumentNumber;
          $driver_licenses->insurance_expire=$request->insurance_documentDate;
          $driver_licenses->passport_no=$request->passport_documentNumber;
          $driver_licenses->passport_exp_date=$request->passport_documentDate;
          
          if($request->licence_img_front){
            $file = $request->file('licence_img_front');
            $input['licence_img_front'] = $file->getClientOriginalName();
            $file->move(public_path('images/driver/licence'),$file->getClientOriginalName());
            $driver_licenses->front_photo=$input['licence_img_front'];
            }else{
            $driver_licenses->front_photo="No";
        }
          if($request->licence_img_back){
            $file = $request->file('licence_img_back');
            $input['licence_img_back'] = $file->getClientOriginalName();
            $file->move(public_path('images/driver/licence'),$file->getClientOriginalName());
            $driver_licenses->back_photo=$input['licence_img_back'];
            }else{
            $driver_licenses->back_photo="No";
        }
          if($request->pco_img){
            $file = $request->file('pco_img');
            $input['pco_img'] = $file->getClientOriginalName();
            $file->move(public_path('images/driver/pco'),$file->getClientOriginalName());
            $driver_licenses->pco_photo=$input['pco_img'];
            }else{
            $driver_licenses->pco_photo="No";
        }
          if($request->insurance_img){
            $file = $request->file('insurance_img');
            $input['insurance_img'] = $file->getClientOriginalName();
            $file->move(public_path('images/driver/insurance'),$file->getClientOriginalName());
            $driver_licenses->insurance_photo=$input['insurance_img'];
            }else{
            $driver_licenses->insurance_photo="No";
        }
          if($request->passport_img){
            $file = $request->file('passport_img');
            $input['passport_img'] = $file->getClientOriginalName();
            $file->move(public_path('images/driver/passport'),$file->getClientOriginalName());
            $driver_licenses->passport_photo=$input['passport_img'];
            }else{
            $driver_licenses->passport_photo="No";
        }

          $driver_licenses->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {  
       $drivers = Driver::join('driver_cars', 'driver_cars.driver_id', '=', 'drivers.id')
              ->join('driver_licenses', 'driver_licenses.driver_id', '=', 'drivers.id')
              ->join('driver__payments', 'driver__payments.driver_id', '=', 'drivers.id')
            ->select('drivers.*', 'driver_cars.*', 'driver__payments.*', 'driver_licenses.*')
            ->get(); 
            // dd($users);
       return view('backend.drivers.drivers', compact('drivers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $where = array('id' => $id);
      $drivers = Driver::join('driver_cars', 'driver_cars.driver_id', '=', 'drivers.id')
      ->join('driver_licenses', 'driver_licenses.driver_id', '=', 'drivers.id')
      ->join('driver__payments', 'driver__payments.driver_id', '=', 'drivers.id')
    ->select('drivers.*', 'driver_cars.*', 'driver__payments.*', 'driver_licenses.*')->where('drivers.id', '=', $id)
    ->get(); 
    // print_r($drivers);
      // $drivers = Driver::where($where)->first();
     
      return view('backend.drivers.editdriver', compact('drivers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy($dr_id)
    {
      $driver = Driver::where('id', '=', $dr_id)->delete();
      $driver_car = Driver_car::where('driver_id', '=',  $dr_id)->delete();
      $driver_payment = Driver_Payment::where('driver_id', '=',  $dr_id)->delete();
      $driver_license = Driver_license::where('driver_id', '=',  $dr_id)->delete();
      // print_r($driver);
        if($driver == 1) {
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
