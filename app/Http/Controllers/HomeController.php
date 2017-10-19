<?php

namespace App\Http\Controllers;

use App\Location;
use App\UserLocation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $userLocations = User::find($userId)->locations()->get();
        return view('home-inner')->with('locations', $userLocations);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function followLocation(Request $request)
    {
        $location = $request->location;
        $location = explode(',',$location);
        $userId = Auth::user()->id;
        if(count($location) > 3){

            $region  = $location[0];
            $city    = $location[1];
            $state   = $location[2];
            $country = $location[3];

        }elseif(count($location) > 2){

            $region   = '';
            $city     = $location[0];
            $state    = $location[1];
            $country  = $location[2];

        }else{

            $region   = '';
            $state    = '';
            $city     = $location[0];
            $country  = $location[1];
        }

        $location = Location::firstOrCreate(['region' => $region,'city' => $city,'state' => $state,'country' => $country]);
        UserLocation::firstOrCreate(['location_id' => $location->id ,'user_id' => $userId]);
        $userLocations = User::find($userId)->locations()->get();
        $returnHTML = view('follow-places')->with('locations', $userLocations)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function unfollowLocation(Request $request)
    {
        $location = $request->location_id;
        $userId = Auth::user()->id;
        $deletedRows = UserLocation::where('user_id', $userId)->where('location_id', $location)->delete();
        $userLocations = User::find($userId)->locations()->get();
        $returnHTML = view('follow-places')->with('locations', $userLocations)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

}
