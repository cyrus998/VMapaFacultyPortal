<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Portfolios extends Component
{

    use WithPagination;

    public $term;

    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise, $portfolio_id;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {

        return view('livewire.portfolios.portfolios', [
            'portfolios' => User::when($this->term, function($query, $term){
                return $query->where('address', 'LIKE', "%$term%")
                ->orWhere('name', 'LIKE', "%$term%")
                ->orWhere('subjectexpertise', 'LIKE', "%$term%")
                ->orWhere('facultyNumber', 'LIKE', "%$term%")
                ->orWhere('aboutme', 'LIKE', "%$term%")
                ->orWhere('contactnumber', 'LIKE', "%$term%");
                
            })->paginate(6)
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
        $this->contactnumber = '';
        $this->address = '';
        $this->aboutme = '';
        $this->subjectexpertise = '';
        
        $this->portfolio_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function store()
    {
        // $this->validate([
        //     'contactnumber' => 'required',
        //     'address' => 'required',
        //     'aboutme' => 'required',
        //     'subjectexpertise' => 'required',
        // ]);
   
        User::updateOrCreate(['id' => $this->portfolio_id], [
            'contactnumber' => $this->contactnumber,
            'address' => $this->address,
            'aboutme' => $this->aboutme,
            'subjectexpertise' => $this->subjectexpertise
        ]);
  
        session()->flash('message', 
            $this->portfolio_id ? 'Portfolio Updated Successfully.' : 'Portfolio Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function edit($id)
    {
        $portfolio = User::findOrFail($id);
        $this->portfolio_id = $id;
        $this->contactnumber = $portfolio->contactnumber;
        $this->address = $portfolio->address;
        $this->aboutme = $portfolio->aboutme;
        $this->subjectexpertise = $portfolio->subjectexpertise;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Portfolio Deleted Successfully.');
    }
}