<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testcase;
use App\Exports\TestExport;
use Excel;
class ExportExcelController extends Controller
{
    function export()
    {
        return Excel::download(new TestExport, 'Testmatrix.xlsx');
    }
}
