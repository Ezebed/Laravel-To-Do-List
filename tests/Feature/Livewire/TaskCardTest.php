<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TaskCard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use App\Models\User;
use App\Models\Task;

class TaskCardTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TaskCard::class)
            ->assertStatus(200);
    }

    /** @test */
    public function see_on_page()
    {
        $user = User::factory()->create();

        Task::factory()->create(['user_id' => $user->id]);

        Livewire::actingAs($user);

        $this->get(route('index'))
            ->assertSeeLivewire(TaskCard::class);
    }

    /** @test */
    public function properties_set()
    {
        $user = User::factory()->create();

        $task = Task::factory()->create([
            'user_id' => $user->id,
            'body' => 'text of task',
            'completed' => false,
        ]);

        Livewire::actingAs($user)
            ->test(TaskCard::class)
            ->set('taskID',$task->id)
            ->set('taskBody',$task->body)
            ->set('taskStatus',$task->completed)
            ->assertSee($task->body);
    }

    /** @test */
    public function toggle_edit()
    {
        Livewire::test(TaskCard::class)
            ->assertDontSeeHtml('<textarea')
            ->call('setEditable')
            ->assertSeeHtml('<textarea ')
            ->call('unsetEditable')
            ->assertDontSeeHtml('<textarea');
    }
    
    /** @test */
    public function dispatch_edited_task()
    {
        Livewire::test(TaskCard::class)
            ->set('taskBody','text of task')
            ->assertSee('text of task')
            ->call('setEditable')
            ->set('taskBody','task edited')
            ->call('updateTask')
            ->assertDispatched('update-task');
            
    }
}
