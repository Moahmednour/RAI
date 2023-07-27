<?php

namespace App\Http\Controllers;


use App\Imports\DataBaseImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataImportController extends Controller
{
    // public function import()
    // {
    // Excel::import(new DataBaseImport, 'users.xlsx');

    // return redirect('/')->with('success', 'All good!');
    // }
    public function show()
    {
        return view('import');
    }


    public function store(Request $request)
    {
       $file = $request->file('file');

         Excel::import(new DataBaseImport, $file);
          
         return back()->withstatus('success', 'All good!');
    }
}
