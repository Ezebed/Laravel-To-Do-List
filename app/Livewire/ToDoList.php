<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Task;

use Livewire\Attributes\On;

class ToDoList extends Component
{
    public $tasks;

    
    public function mount()
    {
        $this->tasks = Task::where('user_id',Auth()->user()->id)->get();
        
    }

    #[on('load-task')]
    public function loadTask()
    {
        $this->tasks = Task::where('user_id',Auth()->user()->id)->get();
        
    }

    public function render()
    {
        return view('livewire.to-do-list');
    }
}
