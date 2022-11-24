<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;

class SchedulePDFController extends Controller
{
    public function generatePDF()
    {
        $subjects = Subject::get();
  
        $data = [
            // 'title' => 'Welcome to ItSolutionStuff.com',
            // 'date' => date('m/d/Y'),
            'subjects' => $subjects,
        ]; 
            
        $pdf = PDF::loadView('subjectsPDF', $data);
     
        return $pdf->setPaper('a4', 'landscape')->download('My Schedule.pdf');
    }
}
