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
		'installation_date',
		'funder'])->toArray();

		return Excel::create('ICT Equipment Itam', function($excel) use ($data)
		{
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}

}
