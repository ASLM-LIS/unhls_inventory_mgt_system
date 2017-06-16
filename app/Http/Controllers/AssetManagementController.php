<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Moddels\asset_mgt;

class AssetManagementController extends Controller
{

public function index(){
  return view('asset_mgt.index');
}
public function store(Request $request)
{

  //validate data
/**  $validation=$this->validate($request, [
      'Asset_name' => 'required|unique:users,username,'.$request['username'],
      'email' => 'required|unique:users,email,'.$request['email'],
      'password' => 'required|min:3',
      'role_id' => 'required|numeric',
  ]);
  $table->increments('id');
  $table->string('Asset_Name');
  $table->string('Asset_Type');
  $table->string('Asset_Category');
  $table->string('Serial_number');
  $table->string('manufacturer');
  $table->string('location');
  $table->string('department');
  $table->string('supplier');
  $table->Int('cost');
  $table->string('funder');
  $table->date('date_of_delivery');
  $table->date('installation_date');
  $table->string('warranty_details');
  $table->string('useful_life');
  $table->date('disposal_date');
  $table->string('method_of_disposal');
  $table->string('status');
  $table->string('repair_details');
  $table->string('service_details');
  $table->string('comments');**/

  $user = new User;

  $user->username = $request->username;
  $user->email = $request->email;
  $user->password= Hash::make($request->password);
  $user->role_id = $request->role_id;
  $user->save();
    // redirect
    Session::flash('message', 'New user successfully added!');
    Session::flash('alert-type', 'success');

    return Redirect::to('user');

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
