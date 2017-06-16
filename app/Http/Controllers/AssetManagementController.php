<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Asset_mgt;

use Illuminate\Support\Facades\Input;

class AssetManagementController extends Controller
{

public function index(){

  $asset_mgr = Asset_mgt::all();
  return view('asset_mgt.index', compact('asset_mgr'));
}

public function store(Request $request)
{

  //validate data
 $validation=$this->validate($request, [
      'Asset_Name' => 'required|unique:users,username,'.$request['username'],
      'Asset_Type' => 'required|unique:users,email,'.$request['email'],
      'Asset_Category' => 'required|min:3',
      'Serial_number' => 'required|numeric',
      'manufacturer'=>'required',
      'location'=>'required',
      'department'=>'required',
      'date_of_delivery'=>'required',
      'installation_date'=>'required',

  ]);
  $validator = Validator::make(Input::all(), $rules);
  if ($validator->fails()) {
    return Redirect::back()->withErrors($validator)->withInput(Input::all());
  } else {
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

  $asset_mgr->save();
    // redirect
    Session::flash('message', 'New user successfully added!');
    Session::flash('alert-type', 'success');

    return Redirect::to('asset_mgt.index');
/**
  try{
    $asset_mgr->save();
    return Redirect::to('asset_mgt.index')->with('message', 'New Asset/Equipment successfully added!');

  }catch(QueryException $e){
    Log::error($e);
    echo $e->getMessage();}
    **/
}
}
public function edit(){

}
public function delete(){

}
public function show(){

}
public function create(){
  return view('asset_mgt.create');
}
}
