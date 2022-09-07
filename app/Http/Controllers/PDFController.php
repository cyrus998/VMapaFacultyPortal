<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
 
use PDF;
   
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'My Portfolio',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('sample-portfolio', $data);
     
        return $pdf->download('portfolio.pdf');
    }
}