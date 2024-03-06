<?php

namespace App\Livewire;

use Livewire\Component;

class TaskCard extends Component
{
    public $taskID;

    public $taskBody;

    public function deleteTask()
    {
        $this->dispatch('delete-task',taskID:$this->taskID);
    }

    public function render()
    {
        return view('livewire.task-card');
    }
}
