<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
  
class Users extends Component
{

    use WithPagination;

    public $term;

    public $name, $email, $password, $facultyNumber, $role, $position, $user_id;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {

        return view('livewire.users.users', [
            'users' => User::when($this->term, function($query, $term){
                return $query->where('name', 'LIKE', "%$term%")
                ->orWhere('email', 'LIKE', "%$term%")
                ->orWhere('facultyNumber', 'LIKE', "%$term%");
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
        $this->name = '';
        $this->email = '';
        // $this->password = '';
        $this->facultyNumber = '';
        $this->role = '';
        $this->position = '';
        $this->user_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'facultyNumber' => 'required',
            'role' => 'required',
            'position' => 'required',
        ]);
   
        User::updateOrCreate(['id' => $this->user_id], [
            'name' => $this->name,
            'email' => $this->email,
            // 'password' => $this->password,
            'facultyNumber' => $this->facultyNumber,
            'role' => $this->role,
            'position' => $this->position
        ]);
  
        session()->flash('message', 
            $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();

        $this->dispatchBrowserEvent('userAdded');

    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

          //$name, $email, $password, $facultyNumber, $role, $position
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        // $this->password = $user->password;
        $this->facultyNumber = $user->facultyNumber;
        $this->role = $user->role;
        $this->position = $user->position;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'delete'];

    public function deleteConfirmation($id){

        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

    }

    public function delete()
    {
        $user = User::where('id', $this->delete_id)->first();
        $user->delete();
        $this->dispatchBrowserEvent('userDeleted');
        session()->flash('message', 'User Deleted Successfully.');
    }
}