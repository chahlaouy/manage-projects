<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $project;
    public $tasks;
    protected $listeners = ['TaskAdded' => 'taskAdded'];

    public function toggleComplete($taskId){
        $task = Task::find($taskId);
        
        if( !$task->completed){

            $task->complete();
            return;
        }
        $task->incomplete();

    }

    public function taskAdded(){
        
    }

    public function render()
    {
        $this->tasks = $this->project->tasks;

        return view('livewire.tasks',[
            'tasks' => $this->tasks
        ]
    );
    }
}
