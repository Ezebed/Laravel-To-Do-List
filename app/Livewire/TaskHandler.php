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

    #[on('delete-task')]
    public function deleteTask($taskID)
    {
        Task::where('id',$taskID)->delete();

        $this->dispatch('load-task');
    }

    #[on('update-task')]
    public function updateTask($taskID,$taskBody)
    {
        $taskToUpdate = Task::find($taskID);

        $taskToUpdate->body = $taskBody;

        $taskToUpdate->save();

        $this->dispatch('load-task');
    }

    #[on('update-status')]
    public function updateStatus($taskID, $newStatus)
    {
        $taskToUpdate = Task::find($taskID);

        $taskToUpdate->completed = $newStatus;

        $taskToUpdate->save();

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
