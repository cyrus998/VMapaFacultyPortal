<?php
   
namespace App\Http\Controllers;
    
use App\Models\Announcement;
use Illuminate\Http\Request;
   
class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['announcements'] = Announcement::orderBy('id','desc')->paginate(5);
     
        return view('announcements.index', $data);
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcements.create');
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
 
        $announcement = new Announcement;
 
        $announcement->date = $request->date;
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->photourl = $request->photourl;

 
 
        $announcement->save();
 
      
        return redirect()->route('announcements.index')
                        ->with('success','Announcement has been created successfully.');
    }
      
    /**
     * Display the specified resource.
     *
     * @param  \App\announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('announcements.show',compact('announcement'));
    } 
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('announcements.edit',compact('announcement'));
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
         
        $announcement = Announcement::find($id);
 
        $announcement->date = $request->date;
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->photourl = $request->photourl;
 
        $announcement->save();
     
        return redirect()->route('announcements.index')
                        ->with('success','Announcement Has Been updated successfully');
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
     
        return redirect()->route('announcements.index')
                        ->with('success','Announcement has been deleted successfully');
    }
}