<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\Asset_mgt;

use DB;

use Excel;

class DownloadExcelController extends Controller

{

	public function index(){
	  $asset_mgr = Asset_mgt::all();
		return view('asset_mgt.index', compact('asset_mgr'));

	}

	public function importExport()
	{

		return view('importExport');

	}

public function destroy($id)
	{
		# code...
	}

	public function downloadExcel($type)
	{
		$data = Asset_mgt::get( ['Asset_Name',
		'Asset_Type',
		'Asset_Category',
		'Serial_number',
		'manufacturer',
		'location',
		'department',
		'date_of_delivery',
		'installation_date'])->toArray();

		return Excel::create('ICT Equipment Itam', function($excel) use ($data)
		{
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

	public function store()

	{

		if(Input::hasFile('import_file')){

			$path = Input::file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {

			})->get();

			if(!empty($data) && $data->count()){

				foreach ($data as $key => $value) {

					$insert[] = ['title' => $value->title, 'description' => $value->description];

				}

				if(!empty($insert)){

					DB::table('items')->insert($insert);

					dd('Insert Record successfully.');

				}

			}

		}

		return back();

	}

}
