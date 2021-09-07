<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all();
        return view('backend.regions.region',compact('region'));
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
          $account = new Region;
          $account->region_name = $request->region_name;
          $account->adress = $request->address_search;
          $account->lat = $request->lat;
          $account->lang = $request->long;
          $account->radius = $request->radius;
          $regiondata=$account->save();
          if($regiondata == 1) {
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
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {   
        $latitude='31.5298677';
        $longitude='74.2591935';
        $radius='200';
        $restaurants=Region::selectRaw("id, region_name, adress, lat, lang, radius,
                         ( 3959 * 1609.344 *acos( cos( radians(?) ) *
                           cos( radians( lat ) )
                           * cos( radians( lang ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( lat ) ) )
                         ) AS distance", [$latitude, $longitude, $latitude])
            ->orderBy("distance",'asc')
            ->first();
            print_r($restaurants->id);
            // foreach ($restaurants as $key => $value) {
            //     print_r($value->radius);echo"<br>";
            // }
        return $restaurants;
        $restaurant=Region::selectRaw("id, region_name, adress, lat, lang, radius,
                         ( 3959 * acos( cos( radians(?) ) *
                           cos( radians( lat ) )
                           * cos( radians( lang ) - radians(?)
                           ) + sin( radians(?) ) *
                           sin( radians( lat ) ) )
                         ) AS distance", [$latitude, $longitude, $latitude])
            ->having("distance", "<", $radius)
            ->orderBy("distance",'asc')
            ->get();

            // print_r($restaurant);
        return $restaurant;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */

    public function setviewprices($id)
    {
        
        $where = array('id' => $id);
        $region = Region::where($where)->first();
        
        return view('backend.regions.viewprices',compact('region'));
    }

    public function edit(Region $region)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }
}
