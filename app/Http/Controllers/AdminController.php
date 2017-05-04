<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use  App\APIController;
use \App\Mvender;
use \App\Magent;
use Datatables;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
    
    public function addVender()
    {
        $countries = new \App\Http\Controllers\APIController();
        $countries = $countries->getCountries();
        return view('add_vender', compact('countries'));
    }

    public function showVender()
    {
        return view('vender');
    }

    public function postVender(Request $request)
    {
        $mvender = new \App\Mvender;
        $mvender->fill($request->all())->save();

        $magent = new \App\Magent;
        $magent->fill($request->all())->save();

        if ($mvender && $magent) {
            return redirect()->back()->with('success', 'Vendor has been added');
        }
    }

    public function getVendorTable()
    {
        $vendors = Mvender::select(['vendor_id_display', 'contact_name', 'phone_number', 'city', 'phone_number', 'vendor_status', 'vendor_id']);
        return Datatables::of($vendors)
        ->removeColumn('vender_id')
        ->addColumn('Action', function ($model) {
            return '<a href="edit-vendor/'.$model->vendor_id.'" class="btn btn-info" role="button">Edit</a>';
        })
        ->make();
    }

    public function editVendor($id) {
        $countries = new \App\Http\Controllers\APIController();
        $countries = $countries->getCountries();
        $vendors = Mvender::where('vendor_id', '=', $id)->first();
        $agents = Magent::where('agent_id', '=', $id)->first();
        return view('edit_vendor', compact('vendors', 'agents', 'countries'));
    }
}
