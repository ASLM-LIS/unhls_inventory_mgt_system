@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">
                  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        <div <ol class="breadcrumb">
                    		  <li><a href="/home">Home</a></li>
                          <li><a class="active"> Stores Requisition & Issue Voucher</a></li>
                            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">REQUISITION FORM</div>
                <div class="panel-body">
      {!! Form::open(array('url' => 'requisition','autocomplete' => 'off', 'class' => 'form-horizontal', 'data-toggle' => 'validator')) !!}
                        {{ csrf_field() }}
                        <fieldset>
                          <div class="form-group">
                          <input class="form-control" readonly="true" name="" value="FORM MH 017" id="" type="text"></input>
                        </div>

                              <div class="form-group">
                                <label for="voucher_date" class="required">Voucher Date</label>
                                    <input class="form-control" name="voucher_date" id="voucher_date" type="date"></input>
                              </div>
                              <div class="form-group">
                                <label for="description">Voucher Number</label>
                                <input class="form-control" name="voucher_no" id="voucher_no" type="integer"></input>
                              </div>
                              <div class="form-group">
                                <label for="unit" class="required">Unit/Section</label>
                                <input class="form-control" name="unit" id="unit" type="text"></input>
                              </div>
                              <div class="form-group">
                                <label for="incharge_name" class="required">In-Charge Name</label>
                                <input class="form-control" name="incharge_name" id="incharge_name" type="text"></input>
                                </div>
                              <div class="form-group">
                                <label for="folio_number" class="required">Folio Number</label>
                                <input class="form-control" name="folio_number" id="folio_number" type="integer"></input>

                              </div>
                              <div class="form-group">
                                <label for="description" class="required">Description Of Commodity</label>
                                <input class="form-control" name="description" value="description of commodity(s)" id="description" type="text"></input></div>
                              <div class="form-group">
                                <label for="issue_unit">Issue Unit</label>
                                <input class="form-control" name="issue_unit" id="issue_unit" type="text"></input>
                              </div>
                              <div class="form-group">
                                <label for="quantity_required">Quantity Required</label>
                                <input class="form-control" name="quantity_required" id="quantity_required" type="integer"></input>
                              </div>
                              <div class="form-group">
                                <label for="quantity_issued">Quantity Issued</label>
                                <input class="form-control" name="quantity_issued" id="quantity_issued" type="integer"></input>
                              </div>
                              <div class="form-group">
                                <label for="unit_cost">Unit Cost</label>
                                <input class="form-control" name="unit_cost" id="unit_cost" type="integer"></input>
                              </div>

                                <label for="dept">______________________________________________________________________</label>
                                </div>
                              <div class="form-group">
                                <label for="">Authorized By::</label>
                              </div>
                              <div class="form-group">
                                <label for="authorized_by">Name::</label>
                                <input class="form-control" type="text" name="Name" value="Full Names">
                                <label for="title">Title::</label>
                                <input class="form-control" type="text" name="title" value="job title">
                              </div>

                                <div class="form-group">
                                  <label >Received By::</label>
                                </div>
                                <div class="form-group">
                                  <label for="dept">Name::</label>
                                  <input class="form-control" type="text" name="Name" value="Full Names">
                                  <label for="title">Title::</label>
                                  <input class="form-control" type="text" name="title" value="job title">
                                </div>

                                      <div class="form-group actions-row">

                                  <button class="btn btn-primary" onclick="submit()" type="submit"><span class="glyphicon glyphicon-save"></span> Save</button>

                                      <button class="btn btn-primary" onclick="print()" type="button"><span class="glyphicon glyphicon-print"></span> Print P.R Form</button>
                                </div>



                            </fieldset>
                {!! Form::close() !!}

                </div>
            </div>

                    	</div>
                    </div>
                </div>
</div>
</link>
@endsection
