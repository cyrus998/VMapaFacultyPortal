<?php
  
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\User;
  
class Portfolios extends Component
{
    public $portfolios, $contactnumber, $address, $aboutme, $subjectexpertise, $portfolio_id;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->portfolios = User::all();
        return view('livewire.portfolios.portfolios');
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
            $this->portfolio_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
  
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
        $post = User::findOrFail($id);
        $this->portfolio_id = $id;
        $this->contactnumber = $post->contactnumber;
        $this->address = $post->address;
        $this->aboutme = $post->aboutme;
        $this->subjectexpertise = $post->subjectexpertise;
    
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
        session()->flash('message', 'Post Deleted Successfully.');
    }
}