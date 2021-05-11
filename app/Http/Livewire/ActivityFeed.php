<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ActivityFeed extends Component
{
    public $project;

    protected $listeners = ['TaskAdded' => 'taskAdded'];

    public function taskAdded(){

    }
    public function render()
    {
        return view('livewire.activity-feed', [
            'activities' => $this->project->activities
        ]);
    }
}
