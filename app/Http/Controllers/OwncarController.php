<?php

namespace App\Http\Controllers;

use App\Models\Owncar;
use Illuminate\Http\Request;

class OwncarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owncar = Owncar::all(); 
       return view('backend.fleet.owncar', compact('owncar'));
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
        $owncar=new Owncar;
        $owncar = Owncar::findOrNew($request->owncar_id);
        

        $owncar->owncar_class=$request->selectedCarClass;
        $owncar->owncar_brand=$request->carBrand;
        $owncar->owncar_model=$request->carModel;
        $owncar->owncar_color=$request->carColor;
        $owncar->owncar_car_no_plate=$request->carRegNo;
        $owncar->owncar_log_book_exp_date=$request->logdocexpDate;
        $owncar->owncar_log_book_doc_no=$request->logdocumentNumber;
        $owncar->owncar_phv_licence_exp_date=$request->phvdocumentDate;
        $owncar->owncar_phv_licence_doc_no=$request->phvdocumentNumber;


        $owncar->owncar_mot_licence_exp_date=$request->motdocumentDate;
        $owncar->owncar_mot_licence_doc_no=$request->motdocumentNumber;
        
        $owncar->owncar_car_insurance_exp_date=$request->insdocumentDate;
        $owncar->owncar_car_insurance_doc_no=$request->insdocumentNumber;


        if($request->phvimg){
            $file = $request->file('phvimg');
            $input['phvimg'] = $file->getClientOriginalName();
            $file->move(public_path('images/fleet/phv'),$file->getClientOriginalName());
            $owncar->owncar_phv_licence_photo=$input['phvimg'];
            }
        if($request->insimg){
            $file = $request->file('insimg');
            $input['insimg'] = $file->getClientOriginalName();
            $file->move(public_path('images/fleet/Insurance'),$file->getClientOriginalName());
            $owncar->owncar_car_insurance_photo=$input['insimg'];
            }
        if($request->logbookimg){
            $file = $request->file('logbookimg');
            $input['logbookimg'] = $file->getClientOriginalName();
            $file->move(public_path('images/fleet/logbookimg'),$file->getClientOriginalName());
            $owncar->owncar_log_book_photo=$input['logbookimg'];
            }
        if($request->motimg){
            $file = $request->file('motimg');
            $input['motimg'] = $file->getClientOriginalName();
            $file->move(public_path('images/fleet/mot'),$file->getClientOriginalName());
            $owncar->owncar_mot_licence_photo=$input['motimg'];
            }
          $owncarsave=$owncar->save();
            if($owncarsave == 1) {
            $success = true;
            $message = "Car Data Saved Successfully";
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
     * @param  \App\Models\Owncar  $owncar
     * @return \Illuminate\Http\Response
     */
    public function show(Owncar $owncar)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Owncar  $owncar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $customer = Owncar::where($where)->first();
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Owncar  $owncar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owncar $owncar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Owncar  $owncar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owncar = Owncar::where('id', '=', $id)->delete();
      
        if($owncar == 1) {
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
