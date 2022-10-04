<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\Subject;
use Livewire\WithPagination;
class Subjects extends Component
{

    use WithPagination;

    public $term;

    public $subjectname, $coursecode, $instructor, $subject_id;
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
    }

    public function render()
    {
        // $this->subjects = Subject::paginate(2);
        return view('livewire.subjects.subjects', [
            'subjects' => Subject::when($this->term, function($query, $term){
                return $query->where('subjectname', 'LIKE', "%$term%")
                ->orWhere('coursecode', 'LIKE', "%$term%")
                ->orWhere('instructor', 'LIKE', "%$term%");
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
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
 

    public function store()
    {
        $this->validate([
            'subjectname' => 'required',
            'coursecode' => 'required',
            'instructor' => 'required',
        ]);

        Subject::updateOrCreate(['id' => $this->subject_id], [
            'subjectname' => $this->subjectname,
            'coursecode' => $this->coursecode,
            'instructor' => $this->instructor
        ]);
  
        session()->flash('message', 
            $this->subject_id ? 'Subject Updated Successfully.' : 'Subject Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();

        $this->dispatchBrowserEvent('subjectAdded');
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