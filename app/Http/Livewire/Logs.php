<?php

namespace App\Http\Livewire;
use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Logs extends Component
{

    use WithPagination;

    public $action, $name, $email, $facultyNumber, $role, $position, $date_time, $activitylog_id;
    public $term;
    public function render()
    {
       
        return view('livewire.logs.logs', [
            'logs' => Log::when($this->term, function($query, $term){
                return $query->where('action', 'LIKE', "%$term%")
                ->orWhere('name', 'LIKE', "%$term%")
                ->orWhere('email', 'LIKE', "%$term%")
                ->orWhere('facultyNumber', 'LIKE', "%$term%")
                ->orWhere('date_time', 'LIKE', "%$term%")
                ->orWhere('role', 'LIKE', "%$term%")
                ->orWhere('position', 'LIKE', "%$term%");
            })->paginate(5)
        ]);

    }


}
