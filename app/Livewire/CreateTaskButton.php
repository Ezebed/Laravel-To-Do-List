<?php

namespace App\Livewire;

use Livewire\Component;

class CreateTaskButton extends Component
{
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function createTask(){

        $this->closeModal();
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.create-task-button');
    }
}
