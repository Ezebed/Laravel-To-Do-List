<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class CreateTaskButton extends Component
{
    public $showModal = false;

    public $body;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function createTask(){

        $this->dispatch('create-task',taskBody: $this->body);

        $this->reset('body');

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
