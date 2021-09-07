<?php

namespace App\Http\Controllers;

use App\Models\Owncar;
use App\Models\Fleet;
use App\Models\Services;
use App\Models\Clientroute;
use App\Models\Client;
use App\Models\ClientService;
use Illuminate\Http\Request;

class ClientrouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clientroute=Owncar::all();
        // return view('backend.clients.Clients',compact('clients'));

    //     $owncar = Owncar::all();
    //     $services = Services::all();
    //   $clientroute[] = $owncar; 
    //   $clientroute[] = $services;  
    //       $result=$clientroute;
    //   print_r($result);
    // $fleets = Fleet::join('owncars', 'owncars.id', '=', 'fleets.owncar_id')
    //           ->join('services', 'services.id', '=', 'fleets.service_car_id')
    //         ->select('fleets.*', 'owncars.*', 'services.*')->Orwhere('fleets.service_car_id','=','services.id')->Orwhere('fleets.owncar_id','=','owncars.id')
    //         ->get(); 
    //         print_r($fleets);
    //         die();
    


    //   $clientroute=Clientroute::all();
    //   print_r()
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
        
        $clientroute=new Clientroute;
        $clientroute->client_id=$request->client_id;
        $clientroute->from_address=$request->from_address;
        $clientroute->from_radius=$request->from_radius;
        $clientroute->from_display_name=$request->fromDisplayName;
        $clientroute->to_address=$request->to_address;
        $clientroute->to_radius=$request->to_radius;
        $clientroute->to_display_name=$request->to_display_name;
        $clientroute->pickup_tick_for_both=$request->pickup_tick_for_both;
        $clientroute->car_servces='carservice';
        $clientroute->passengers='passengers';
        $clientroute->laguage='laguage';
        $clientroute->price='price';
        $clientsave=$clientroute->save();
        
        $cars=$request->car_servces;
        $price=$request->price;
        $laguage=$request->laguage;
        $passengers=$request->passengers;
        $i=0;
        foreach($cars as $key=>$value) {
          $clientservice=new ClientService;
          $clientservice->car_servces_name=$value;
          $clientservice->passengers=$passengers[$i];
          $clientservice->price=$price[$i];
          $clientservice->laguage=$laguage[$i];
          $clientservice->client_id=$request->client_id;
          $clientservice->client_route_id=$clientroute->id;
          $i++;
          $client=$clientservice->save();
        }

        // print_r($client);
        // die();
            if($client == 1) {
                $success = true;
                $message = "Prices Saved Successfully";
            } else {
                $success = false;
                $message = "Prices not Saved Successfully";
            }
          return response()->json([
                'success' => $success,
                'message' => $message,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientroute  $clientroute
     * @return \Illuminate\Http\Response
     */
    public function show(Clientroute $clientroute)
    {
        //
    }
    public function setprice_for_client($id)
    {
        $res= [];
        $owncar=Owncar::all();
        array_push($res,$owncar);
        $services=Services::all();
        array_push($res,$services);
        $where = array('id' => $id);
        $clientPrices = Client::where($where)->first();
        $where = array('client_id' => $id);
        $clientroute = Clientroute::where($where)->get();
        $where = array('client_id' => $id);
        $clientservice = ClientService::where($where)->get();
        return view('backend.clients.clientroute',compact('res','clientPrices','clientservice','clientroute'));
        // return response()->json($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientroute  $clientroute
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientroute $clientroute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientroute  $clientroute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientroute $clientroute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientroute  $clientroute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientroute $clientroute)
    {
        //
    }
}
