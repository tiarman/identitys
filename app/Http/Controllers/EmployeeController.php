<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
   



      // Display user data in view
    public function showEmployees(){
        $employee = Employee::all();
        return view('pdftest', compact('employee'));
      }
      // Generate PDF
      public function createPDF() {
        $data['datas'] = Employee::all();
        view()->share('employee',$data);
        $pdf = FacadePdf::loadView('pdfshow', $data);
        return $pdf->download('pdf_file.pdf');
      }
}
