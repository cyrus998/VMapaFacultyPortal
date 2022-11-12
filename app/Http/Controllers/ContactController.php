<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('aboutview');
    }



    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        $input = $request->all();

        Contact::create($input);

        // return view('aboutview');
        return redirect()->back()->with('success', 'Email Sent, please wait for a reply.');
    }
}
