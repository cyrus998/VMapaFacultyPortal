<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SchedulePDFController extends Controller
{
    public function generatePDF()
    {
        $subjects = Subject::get();
  
        $dt = Carbon::now();
        $datetime= $dt->toDayDateTimeString();
        $activitylog = [

            'action' => 'Downloaded Schedule',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'role' => Auth::user()->role,
            'date_time' => $datetime,
        ];
        DB::table('activitylogs')->insert($activitylog);
        
        $data = [
            // 'title' => 'Welcome to ItSolutionStuff.com',
            // 'date' => date('m/d/Y'),
            'subjects' => $subjects,
        ]; 
            
        $pdf = PDF::loadView('subjectsPDF', $data);
     
        return $pdf->setPaper('a4', 'landscape')->download('My Schedule.pdf');
    }
}
