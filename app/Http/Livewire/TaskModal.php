<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class TaskModal extends Component
{
    use WithFileUploads;

    public $project;
    public $images = [];
    public $description;
    public $general_notes;
    public $files;
    public $title;

    public function submitForm()
    {
        $images = [];
        $files = [];
        $this->validate([
            'images.*' => 'sometimes|required|max:2028',
            'files.*' => 'sometimes|required|max:2028',
            'description' => 'required',
            'general_notes' => 'sometimes|required',
            'files' => 'sometimes|required'

        ]);

        foreach ($this->images as $image) {
            $name= time() . '.' . $image->getClientOriginalName();
            array_push($images, $name);
            $image->move(public_path('assets/images/'. $this->project->title . '/' . $this->title), $name);
        }
        foreach ($this->files as $file) {
            $name= time() . '.' . $image->getClientOriginalName();
            array_push($files, $name);
            $file->move(public_path('assets/files/'. $this->project->title . '/' . $this->title), $name);
        }

        $this->project->tasks()->create([
            'title' => $this->title,
            'description' => $this->description,
            'general_notes' => $this->general_notes,
            'files' => $this->files, 
            'images' => $this->images,
        ]);
    }
    public function render()
    {
        return view('livewire.task-modal');
    }
}
