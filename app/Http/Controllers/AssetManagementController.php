<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\Asset_mgt;

use Illuminate\Support\Facades\Input;

use Validator;

use Session;

use Excel;

class AssetManagementController extends Controller
{
public function index(){

  $asset_mgr = Asset_mgt::all();
  return view('asset_mgt.index', compact('asset_mgr'));
}

public function create(){
  //create new item
  return view('asset_mgt.create');
}

public function store(Request $request)
{
  //Validate data/ mandatory fields
 $validation=$this->validate($request, [
      'Asset_Name' => 'required',
      'Serial_number' => 'required|numeric',
      'manufacturer'=>'required',
      'location'=>'required',
      'department'=>'required',
      'date_of_delivery'=>'required',
      'installation_date'=>'required',
  ]);
  //writing to DB
  $asset_mgr = new Asset_mgt;

  $asset_mgr->Asset_Name = $request->Asset_Name;
  $asset_mgr->Asset_Type = $request->Asset_Type;
  $asset_mgr->Asset_Category =$request->Asset_Category;
  $asset_mgr->Serial_number = $request->Serial_number;
  $asset_mgr->manufacturer = $request->manufacturer;
  $asset_mgr->location = $request->location;
  $asset_mgr->department = $request->department;
  $asset_mgr->supplier = $request->supplier;
  $asset_mgr->cost = $request->cost;
  $asset_mgr->funder = $request->funder;
  $asset_mgr->date_of_delivery = $request->date_of_delivery;
  $asset_mgr->installation_date = $request->installation_date;
  $asset_mgr->warranty_details = $request ->warranty_details;
  $asset_mgr->useful_life = $request->useful_life;
  $asset_mgr->disposal_date = $request->disposal_date;
  $asset_mgr->method_of_disposal = $request->method_of_disposal;
  $asset_mgr->status = $request->status;
  $asset_mgr->repair_details = $request->repair_details;
  $asset_mgr->service_details = $request->service_details;
  $asset_mgr->comments = $request->comments;

  $asset_mgr->save();
    // redirect
  Session::flash('message', 'Item successfully added!');
  Session::flash('alert-type', 'success');
  return Redirect::to('iasda');
}

public function update(Request $request, $id)
{

  //validate data
  $validation=$this->validate($request, [
    'Asset_Name' => 'required',
    'Serial_number' => 'required|numeric',
    'manufacturer'=>'required',
    'location'=>'required',
    'department'=>'required',
    'date_of_delivery'=>'required',
    'installation_date'=>'required',
  ]);


  $asset_mgt = Asset_mgt::find($id);

  $asset_mgr->Asset_Name = $request->Asset_Name;
  $asset_mgr->Asset_Type = $request->Asset_Type;
  $asset_mgr->Asset_Category =$request->Asset_Category;
  $asset_mgr->Serial_number = $request->Serial_number;
  $asset_mgr->manufacturer = $request->manufacturer;
  $asset_mgr->location = $request->location;
  $asset_mgr->department = $request->department;
  $asset_mgr->supplier = $request->supplier;
  $asset_mgr->cost = $request->cost;
  $asset_mgr->funder = $request->funder;
  $asset_mgr->date_of_delivery = $request->date_of_delivery;
  $asset_mgr->installation_date = $request->installation_date;
  $asset_mgr->warranty_details = $request ->warranty_details;
  $asset_mgr->useful_life = $request->useful_life;
  $asset_mgr->disposal_date = $request->disposal_date;
  $asset_mgr->method_of_disposal = $request->method_of_disposal;
  $asset_mgr->status = $request->status;
  $asset_mgr->repair_details = $request->repair_details;
  $asset_mgr->service_details = $request->service_details;
  $asset_mgr->comments = $request->comments;

  $asset_mgr->save();
    // redirect
  Session::flash('message', 'Item successfully added!');
  Session::flash('alert-type', 'success');
  return Redirect::to('asset_mgt.index');
}

public function edit(){

  $asset_mgt = Asset_mgt::all();

  return view('asset_mgt.edit');

}
public function destroy($id){

          // delete
          $asset_mgr = Asset_mgt::find($id);
          $asset_mgr->delete();

          // redirect
          Session::flash('message', 'Item successfully deleted!');
          Session::flash('alert-type', 'success');

          return Redirect::to('asset_mgt');
}
public function show($id){
    return view('asset_mgt.ict_asset_mgt');
}
}
