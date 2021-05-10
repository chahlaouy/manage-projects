<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function owner(){

        return $this->belongsTo(User::class, 'owner_id');
    }

    public function tasks(){

        return $this->hasMany(Task::class);
    }

    public function addTask($description){

        return $this->tasks()->create(['description' => $description]);
    }

    public function path(){

        return '/projects/' . $this->id;
    }

    public function activities(){

        return $this->hasMany(Activity::class)->latest('updated_at');
    }

    public function recordActivity($description){

        return $this->activities()->create([
            'description' => $description
        ]);
    }
}
