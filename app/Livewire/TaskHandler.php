<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\On; 

class TaskHandler extends Component
{
    #[on('create-task')]
    public function createTask($taskBody)
    {
        dd('task creado: '.$taskBody);
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
