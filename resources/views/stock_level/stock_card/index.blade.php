@include('settings.delete_modal')

@extends('layouts.app')

@section('content')
<div class="page_content">
                <div class="container-fluid">

                    <div class="row">
                    	<div class="col-md-12">


                                    <div class="panel panel-default">
										<table class="custom-data-table table table-striped dataTable no-footer display nowrap" id="user" data-form="deleteForm">

										<caption>
											<h4 class="pull-left">Authenticated Users</h4>
											<a type="button" href="{{ url('/user/create') }}" class="btn btn-sm btn-primary pull-right"><span class="ion-plus"> Add User</span></a>
										</caption>

										  <thead>
										    <tr>
										      <th >#</th>
										      <th >User Name</th>
                          <th >Role</th>
										      <th >Email</th>
										      <th ></th>

										    </tr>
										  </thead>
										  <tbody>
										  	<?php $row=1; ?>
										  	@foreach($users as $user)
										    <tr>
										      <th> {{ $row }} </th>
										      <td>{{ $user->username }}</td>
                          <td>{{ $user->role->role}}</td>
										      <td>{{ $user->email }}</td>

										      <td>

								                {{ Form::open(array('url' => 'user/' . $user->id, 'class' => 'pull-right form-delete')) }}
								                    {{ Form::hidden('_method', 'DELETE') }}
								                    {{Form::button('<span class="ion-trash-a"> </span>Delete', array('type' => 'submit', 'class' => 'btn btn-link', 'name' => 'delete_modal'))}}
								                {{ Form::close() }}

										      	<a href="{{ route('user.edit', $user->id) }}" class="btn btn-link form-control-static pull-right"><span class="ion-edit"></span> Edit</a>
											</td>
										    </tr>
										    <?php $row++; ?>
										    @endforeach
										  </tbody>
										</table>
									</div>

                    	</div>
                    </div>
                </div>
</div>
@endsection
