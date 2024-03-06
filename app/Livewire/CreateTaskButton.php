<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\Validate;

class CreateTaskButton extends Component
{
    public $showModal = false;

    #[Validate('required|max:255', as: 'Tarea')]
    public $body = '';

    public function openModal()
    {
        $this->showModal = true;

        
        $this->reset('body');
    }

    public function createTask(){

        $validated = $this->validate();

        $this->dispatch('create-task',taskBody: $validated['body']);
        

        

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
