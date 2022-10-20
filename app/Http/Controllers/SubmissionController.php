<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = Submission::latest()->paginate(5);

        return view('submission.index', compact('submissions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('submission.create');
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
            'name' => 'required',
            'detail' => 'required',
            'yearlevel' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'form137' => 'required|mimes:jpeg,png,jpg,gif,pdf,docx,svg|max:4096',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($form137 = $request->file('form137')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $form137->getClientOriginalExtension();
            $form137->move($destinationPath, $profileImage);
            $input['form137'] = "$profileImage";
        }

        Submission::create($input);

        return redirect()->route('submissions.create')
            ->with('success', 'Submission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        return view('submission.show', compact('submission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        return view('submission.edit', compact('submission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'yearlevel' => 'required',
            'image' => 'required',
            'form137' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        if ($form137 = $request->file('form137')) {
            $destinationPath = 'uploads/';
            $profileImage = date('YmdHis') . "." . $form137->getClientOriginalExtension();
            $form137->move($destinationPath, $profileImage);
            $input['form137'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $submission->update($input);

        return redirect()->route('submissions.index')
            ->with('success', 'Submission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        $submission->delete();

        return redirect()->route('submissions.index')
            ->with('success', 'Submission deleted successfully');
    }
}
