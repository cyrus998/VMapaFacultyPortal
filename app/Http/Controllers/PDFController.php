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
    
    public function getPortfolio()
    {
        return view('portfolio');
    }

    public function createPDF(Request $request)
{
    $pdf = PDF::loadView('sample-portfolio', [
        'fullname' => $request->input('fullname'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'about' => $request->input('about'),
    ]);

    return $pdf->download('portfolio.pdf');
}

}