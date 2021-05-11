<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ProjectDataTable extends Component
{
    use WithPagination;

    protected $listeners = ['ProjectAdded' => 'projectAdded'];

    public function projectAdded(){
        $this->emit('refreshPage', 'msg');
    }
    public function render()
    {
    
        return view('livewire.project-data-table', [
            'projects' => auth()->user()->projects()->latest()->paginate(9)
        ]);
    }
}
