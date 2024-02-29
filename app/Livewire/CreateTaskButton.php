<?php

namespace App\Livewire;

use Livewire\Component;

class CreateTaskButton extends Component
{
    public $showTaskForm = false;

    public function showModal()
    {
        $this->showTaskForm = true;;
    }

    public function createTask(){

        $this->showTaskForm = false;
    }

    public function closeModal()
    {
        $this->showTaskForm = false;
    }

    public function render()
    {
        return view('livewire.create-task-button');
    }
}
