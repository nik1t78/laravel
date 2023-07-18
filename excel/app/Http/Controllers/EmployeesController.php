<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function fileImportExport()
    {
       return view('file-import');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request)
    {
        Excel::import(new ImportEmployee, $request->file('file')->store('temp'));
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport(Request $request)
    {
        return Excel::download(new ImportEmployee, 'employee-collection.xlsx');
    }
}
