<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Subjects extends Component
{

    use WithPagination;

    public $term;

    public $subjectname, $coursecode, $instructor, $subject_id, $subjectday, $section, $roomno, $starttime, $endtime;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  
    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deleteSubject'];

    public function deleteConfirmation($id){

        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

    }

    public function deleteSubject(){
        $subject = Subject::where('id', $this->delete_id)->first();
        $subject->delete();

        $this->dispatchBrowserEvent('subjectDeleted');

        $dt = Carbon::now();
        $datetime= $dt->toDayDateTimeString();
        $activitylog = [

            'action' => 'Deleted A Subject',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'role' => Auth::user()->role,
            'date_time' => $datetime,
        ];
        DB::table('logs')->insert($activitylog);
        
    }

    public function render()
    {
        // $this->subjects = Subject::paginate(2);
        return view('livewire.subjects.subjects', [
            'subjects' => Subject::when($this->term, function($query, $term){
                return $query->where('subjectname', 'LIKE', "%$term%")
                ->orWhere('coursecode', 'LIKE', "%$term%")
                ->orWhere('instructor', 'LIKE', "%$term%")
                ->orWhere('subjectday', 'LIKE', "%$term%")
                ->orWhere('section', 'LIKE', "%$term%")
                ->orWhere('roomno', 'LIKE', "%$term%");
            })->paginate(5)
        ]);
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    private function resetInputFields(){
        $this->subjectname = '';
        $this->coursecode = '';
        $this->instructor = '';
        $this->subject_id = '';
        $this->subjectday = '';
        $this->section = '';
        $this->roomno = '';
        $this->starttime = '';
        $this->endtime = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 

    public function store()
    {
        $this->validate([
            'subjectname' => [
                'required', 
                Rule::unique('subjects')
                       ->where('instructor', $this->instructor)
                       ->ignore($this->subject_id)
                ],
            'coursecode' => [
                'required', 
                Rule::unique('subjects')
                       ->where('instructor', $this->instructor)
                       ->ignore($this->subject_id)
                ],
            'instructor' => 'required|string',
            'subjectday' => 'required|string',
            'section' => [
                'required', 
                Rule::unique('subjects')
                       ->where('instructor', $this->instructor)
                       ->ignore($this->subject_id)
                ],
            'roomno' => 'required|string',
            'starttime' => [
                'required',
                'date_format:H:i',
                Rule::unique('subjects')
                       ->where('instructor', $this->instructor)
                       ->where('subjectday', $this->subjectday)
                       ->ignore($this->subject_id)
                ],
            'endtime' => [
                'required',
                'date_format:H:i',
                'after:starttime',
                Rule::unique('subjects')
                       ->where('instructor', $this->instructor)
                       ->where('subjectday', $this->subjectday)
                       ->ignore($this->subject_id)
                ],
        ]);

        Subject::updateOrCreate(['id' => $this->subject_id], [
            'subjectname' => $this->subjectname,
            'coursecode' => $this->coursecode,
            'instructor' => $this->instructor,
            'subjectday' => $this->subjectday,
            'section' => $this->section,
            'roomno' => $this->roomno,
            'starttime' => $this->starttime,
            'endtime' => $this->endtime,
        ]);
  
        session()->flash('message', 
            $this->subject_id ? 'Subject Updated Successfully.' : 'Subject Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();

        $this->dispatchBrowserEvent('subjectAdded');

        
        $dt = Carbon::now();
        $datetime= $dt->toDayDateTimeString();
        $activitylog = [

            'action' => 'Managed A Subject',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'role' => Auth::user()->role,
            'date_time' => $datetime,
        ];
        DB::table('logs')->insert($activitylog);


    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $this->subject_id = $id;
        $this->subjectname = $subject->subjectname;
        $this->coursecode = $subject->coursecode;
        $this->instructor = $subject->instructor;
        $this->subjectday = $subject->subjectday;
        $this->section = $subject->section;
        $this->roomno = $subject->roomno;
        $this->starttime = $subject->starttime;
        $this->endtime = $subject->endtime;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Subject::find($id)->delete();
        session()->flash('message', 'Subject Deleted Successfully.');

    }
}