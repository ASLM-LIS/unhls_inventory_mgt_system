<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use app\models\stock_card;

use validator;

use Session;

class stock_card extends Controller
{
    public function index(){
      return view(index);
    }
    public function edit(Request $request){
      $validator = new Valiator();


    }
    public function store(Request $request)
    {
      $validation=$this->validate($request, [
          'Batch_number' => 'required|unique:stocks,Batch_number,'.$request['Batch_number'],
          'Lot_number' => 'required|unique:stocks,Lot_number,'.$request['Lot_number'],
          'Serial_number' => 'required',
          'Dept_code' => 'required|numeric',
      ]);

    }
    public function delete(){

    }
    public function update(){

    }
}
