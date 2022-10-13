<?php
   
namespace App\Http\Controllers;
    
use App\Models\FacultyAnnouncement;
use Illuminate\Http\Request;
   
class FacultyAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['faculty-announcements'] = FacultyAnnouncement::orderBy('id','desc')->paginate(5);
     
        return view('faculty-announcements.index', $data);
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty-announcements.create');
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
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'photourl' => 'required'
        ]);
 
        $announcement = new FacultyAnnouncement;
 
        $announcement->date = $request->date;
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->photourl = $request->photourl;

 
 
        $announcement->save();
 
      
        return redirect()->route('faculty-announcements.index')
                        ->with('success','Announcement has been created successfully.');
    }
      
    /**
     * Display the specified resource.
     *
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyAnnouncement $announcement)
    {
        return view('faculty-announcements.show',compact('announcement'));
    } 
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FacultyAnnouncement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyAnnouncement $announcement)
    {
        return view('faculty-announcements.edit',compact('announcement'));
    }
     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'photourl' => 'required',
        ]);
         
        $announcement = FacultyAnnouncement::find($id);
 
        $announcement->date = $request->date;
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->photourl = $request->photourl;
 
        $announcement->save();
     
        return redirect()->route('faculty-announcements.index')
                        ->with('success','Announcement Has Been updated successfully');
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyAnnouncement $announcement)
    {
        $announcement->delete();
     
        return redirect()->route('faculty-announcements.index')
                        ->with('success','Announcement has been deleted successfully');
    }
}