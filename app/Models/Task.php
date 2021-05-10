<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected $casts = [
        'images' => 'array',
        'files' => 'array',
    ];
    
    public function project(){

        return $this->belongsTo(Project::class);
    }

    public function activities(){

        return $this->morphMany(Task::class, 'subject');
    }

    public function complete(){
        $this->update([
            'completed' => true 
        ]);
    }
    public function incomplete(){
        $this->update([
            'completed' => false 
        ]);
    }
}
