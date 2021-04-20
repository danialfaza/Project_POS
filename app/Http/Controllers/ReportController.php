<?php

namespace App\Http\Controllers;
use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {	
    	$title = 'Report Sale';
    	return view('report.index', compact('title'));
    }

    public function export_excel()
	{
		return Excel::download(new ReportExport, 'report.xlsx');
	}
}
