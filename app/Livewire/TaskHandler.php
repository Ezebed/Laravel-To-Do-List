<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Task;

use Livewire\Attributes\On;

class TaskHandler extends Component
{
    #[on('create-task')]
    public function createTask($taskBody)
    {
        Task::create([
            'user_id' => Auth()->user()->id,
            'body' => $taskBody,
        ]);

        $this->dispatch('load-task');
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
        </div>
        HTML;
    }
}
