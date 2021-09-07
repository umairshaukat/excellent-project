<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::all(); 
       return view('backend.fleet.services', compact('services'));
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
        $services=new Services;
        $services = Services::findOrNew($request->service_id);

        $services->service_name=$request->servicename;
        $services->sort_index=$request->sortIndex;
        $services->service_passenger_count=$request->numberOfPassengers;
        $services->service_luggage_count=$request->numberOfLuggages;
        $services->service_discription=$request->equivalent;
        $services->service_category=$request->bookingDotComCategory;
        

         if($request->serviceimg){
            $file = $request->file('serviceimg');
            $input['serviceimg'] = $file->getClientOriginalName();
            $file->move(public_path('images/fleet/service'),$file->getClientOriginalName());
            $services->service_photo=$input['serviceimg'];
            }
         $servicessave=$services->save();
            if($servicessave == 1) {
            $success = true;
            $message = "Service Data Saved Successfully";
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
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $customer = Services::where($where)->first();
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::where('id', '=', $id)->delete();
      
        if($services == 1) {
            $success = true;
            $message = "Services deleted successfully";
        } else {
            $success = false;
            $message = "Services not deleted";
        }
      return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
    
}
