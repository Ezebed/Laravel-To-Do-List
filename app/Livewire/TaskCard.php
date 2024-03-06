<?php

namespace App\Livewire;

use Livewire\Component;

class TaskCard extends Component
{
    public $taskID;

    public $taskBody;

    public $originalBody;

    public $editable = false;

    public function mount()
    {
        $this->originalBody = $this->taskBody;
    }

    public function deleteTask()
    {
        $this->dispatch('delete-task',taskID:$this->taskID);
    }

    public function setEditable()
    {
        $this->editable = true;
    }

    public function unsetEditable()
    {
        $this->editable = false;
    }

    public function render()
    {
        return view('livewire.task-card');
    }
}
