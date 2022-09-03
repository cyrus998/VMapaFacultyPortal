<?php
   
namespace App\Http\Controllers;
    
use App\Models\Announcement;
use Illuminate\Http\Request;
   
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = Users::orderBy('id','desc')->paginate(5);
     
        return view('admin.index', $data);
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'facultyNumber' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
 
        $user = new Users;
 
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->facultyNumber = $request->facultyNumber;
        $user->role = $request->role;
        $user->password = $request->password;
 
        $user->save();
 
      
        return redirect()->route('admin.index')
                        ->with('success','Account has been created successfully.');
    }
      
    /**
     * Display the specified resource.
     *
     * @param  \App\user  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Users $user)
    {
        return view('admin.show',compact('user'));
    } 
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $user)
    {
        return view('admin.edit',compact('user'));
    }
     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'facultyNumber' => 'required',
            'role' => 'required',
        ]);
         
        $user = Users::find($id);
 
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->facultyNumber = $request->facultyNumber;
        $user->role = $request->role;
 
        $user->save();
     
        return redirect()->route('admin.index')
                        ->with('success','Account Has Been updated successfully');
    }
     
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        $user->delete();
     
        return redirect()->route('admin.index')
                        ->with('success','Account has been deleted successfully');
    }
}