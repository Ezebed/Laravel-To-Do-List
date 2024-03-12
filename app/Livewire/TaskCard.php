<?php

namespace App\Livewire;

use Livewire\Component;

class TaskCard extends Component
{
    public $taskID;

    public $taskBody;

    public $originalBody;

    public $taskStatus;

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

        $this->taskBody = $this->originalBody;
    }

    public function updateTask()
    {
        $this->editable = false;
        
        $this->dispatch('update-task', taskID:$this->taskID, taskBody:$this->taskBody);
    }

    public function updateStatus()
    {
        $this->dispatch('update-status', taskID: $this->taskID, newStatus: $this->taskStatus == 1 ? 0 : 1 );
    }

    public function render()
    {
        return view('livewire.task-card');
    }
}
