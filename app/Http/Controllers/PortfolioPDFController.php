<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Auth;

class PortfolioPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::get();
  
        $data = [
            'title' => 'User Portfolio',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'contactnumber' => Auth::user()->contactnumber,
            'address' => Auth::user()->address,
            'aboutme' => Auth::user()->aboutme,
            'subjectexpertise' => Auth::user()->subjectexpertise,
            'yeargraduated' => Auth::user()->yeargraduated,
            'collegename' => Auth::user()->collegename,
            'teachercollegecourse' => Auth::user()->teachercollegecourse,
            'image' => Auth::user()->image,

            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
            
        $pdf = PDF::loadView('myPDF', $data);
     
        return $pdf->download('My Portfolio.pdf');
    }
}