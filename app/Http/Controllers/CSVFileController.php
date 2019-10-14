<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CsvExport;
use App\Imports\CsvImport;
use Maatwebsite\Excel\Facades\Excel;
use App\User;

class CSVFileController extends Controller
{
    public function index()
    {
        $data = User::latest()->paginate(10);
        return view('csv_file_pagination',compact('data'))->with('i',(request()->input('page',1)-1)*10);
    }

    public function csv_import()
    {
        Excel::import(new CsvImport,request()->file('file'));
        return back();
    }

    public function csv_export()
    {
        return Excel::download(new CsvExport,'sample.csv');
    }
}
