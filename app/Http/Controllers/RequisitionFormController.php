<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RequisitionForm;

use validation;


class RequisitionFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $requisition_form = RequisitionForm::all();
      return view('requisition_form.index', compact('requisition_form'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('requisition_form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //validate data
      $validation=$this->validate($request, [
          'voucher_no' => 'required|numeric',
          'unit' => 'required|max:50',
          'incharge_name' => 'required|max:50',
          'folio_number' => 'required|numeric',
          'description' => 'required|max:50',
          'issue_unit' => 'required|max:50',
          'quantity_required' => 'required|numeric',
          'quantity_issued' => 'required|max:50',
          'total_issued' => 'required|numeric',
          'grand_total' => 'required|numeric',
          'authorized_by' => 'required|max:50',
          'received_by' => 'required|max:50',
          'title' => 'required|max:50',
          'issue_date' => 'required|max:50',
          'stock_card_date' => 'required|max:50',

      ]);
      $requisition = new RequisitionForm;

      $requisition->voucher_no = $request->voucher_no;
      $requisition->unit = $request->unit;
      $requisition->incharge_name = $request->incharge_name;
      $requisition->folio_number = $request->folio_number;
      $requisition->issue_unit = $request->issue_unit;
      $requisition->description = $request->description;
      $requisition->quantity_required = $request->quantity_required;
      $requisition->quantity_issued = $request->quantity_issued;
      $requisition->total_issued = $request->total_issued;
      $requisition->grand_total = $request->grand_total;
      $requisition->authorized_by = $request->authorized_by;
      $requisition->received_by = $request->received_by;
      $requisition->title = $request->title;
      $requisition->issue_date = $request->issue_date;
      $requisition->stock_card_date = $request->stock_card_date;

      //try{
        $requisition->save();
        // redirect
        Session::flash('message', 'Requisition successfully submitted!');
        Session::flash('alert-type', 'success');
        return Redirect::to('requisition_form.index');

      //}catch(QueryException $e){
        //Log::error($e);
        //echo $e->getMessage();
    //  }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
