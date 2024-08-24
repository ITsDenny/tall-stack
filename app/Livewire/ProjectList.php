<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $projects;



    public function mount()
    {
        $this->projects = Project::with('category')->get();
    }

    public function render()
    {
        return view('livewire.project-list');
    }
}
