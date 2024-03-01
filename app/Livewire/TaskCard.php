<?php

namespace App\Livewire;

use Livewire\Component;

class TaskCard extends Component
{
    public $taskBody = "Esta es una tarea larga";
    public function render()
    {
        return view('livewire.task-card');
    }
}
