<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class APIController extends Controller
{
    public function index()
    {
        $countries = $this->getCountries();
        return view('index',compact('countries'));
    }
    public function getStateList(Request $request)
    {
//        dd('sd');
        $states = DB::table("states")
                    ->where("country_id",$request->country_id)
                    ->pluck("name","id");
//        dd($states);
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
//        dd($request->state_id);
        $cities = DB::table("cities")
                    ->where("state_id",$request->state_id)
                    ->pluck("name","id");
//        dd($cities);
        return response()->json($cities);
    }
    
    public function getCountries() 
    {
        $countries = DB::table("countries")->pluck("name","id");
        return $countries;
    }
}