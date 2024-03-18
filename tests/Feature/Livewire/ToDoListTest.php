<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ToDoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use App\Models\User;
use App\Models\Task;

class ToDoListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        $user = User::factory()->create();
        Livewire::actingAs($user)
            ->test(ToDoList::class)
            ->assertStatus(200);
    }

    /** @test */
    public function exist_on_page()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user);

        $this->get(route('index'))
            ->assertSeeLivewire(ToDoList::class);
    }

    /** @test */
    public function display_user_tasks()
    {   
        $user = User::factory()->create();

        Task::factory()->create(['user_id' => $user->id]);
        Task::factory()->create(['user_id' => $user->id]);
        Task::factory()->create(['user_id' => $user->id]);

        Livewire::actingAs($user)
            ->test(ToDoList::class)
            ->assertViewHas('tasks', function($tasks) { return count($tasks) == 3; });
    }

    /** @test */
    public function see_empty_list_banner()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
            ->test(ToDoList::class)
            ->assertSee(__('ToDoList.listEmpty'));
    }
}
