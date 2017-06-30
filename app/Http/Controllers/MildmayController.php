<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mildmay;

use Session;

use validation;

use App\Http\Requests;

class MildmayController extends Controller
{
  public function index(){
    
    $mildmay = Mildmay::all();
    return view('mildmay.index', compact('mildmay'));
}

  public function create(){
    return view('mildmay.create');
  }
  public function show(){
  //return view('mildmay.index');
}


  public function delete(){

  }
  public function store(Request $request){
    //validate data
    $validation=$this->validate($request, [
        'cost_code' => 'required|numeric',
        'dept' => 'required|max:50',
        'unit_cost' => 'required|numeric',
        'description' => 'required|max:50',
        'funder' => 'required|max:50',
        //'Serial_number' => 'required|unique:mauls,Serial_number'.$request['Serial_number'],
        'quantity' => 'required|numeric',
        'estimated_unit_cost' => 'required|numeric'
    ]);
    $maul = new maul;
    $maul->cost_code = $request->cost_code;
    $maul->dept = $request->dept;
    $maul->unit_cost = $request->unit_cost;
    $maul->description = $request->description;
    $maul->funder = $request->funder;
  //$maul->Serial_number = $request->Serial_number;
    $maul->quantity = $request->quantity;
    $maul->estimated_unit_cost = $request->estimated_unit_cost;

    $maul->save();
    // redirect
    Session::flash('message', 'Purchase request successfully made!');
    Session::flash('alert-type', 'success');
    return Redirect::to('mildmay');

  }

}
