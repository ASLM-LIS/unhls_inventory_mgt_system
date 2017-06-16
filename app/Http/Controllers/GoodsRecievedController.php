<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\GoodsRecieved;

use session;

use validation;

class GoodsRecievedController extends Controller
{
    public function index(){
      return view('vouchers.goods.index');
    }
    public function show(){
      return view('vouchers.goods.index');      
    }
    public function create(){
        return view('vouchers.goods.create');
    }
    public function store(Request $request){

    }
}
