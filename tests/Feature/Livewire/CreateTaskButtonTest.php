<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateTaskButton;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use App\Models\User;

class CreateTaskButtonTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateTaskButton::class)
            ->assertStatus(200);
    }

    /** @test */
    public function see_on_page()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user);
        
        $this->get(route('index'))
            ->assertSeeLivewire(CreateTaskButton::class);
    }

    /** @test */
    public function see_create_button()
    {
        Livewire::test(CreateTaskButton::class)
            ->assertSeeHtml('<button')
            ->assertSee(__('ToDoList.button.add'));
    }

    /** @test */
    public function toggle_modal_form()
    {
        Livewire::test(CreateTaskButton::class)
            ->assertDontSeeHtml('<div class="fixed w-screen h-screen')
            ->call('openModal')
            ->assertSeeHtml('<div class="fixed w-screen h-screen')
            ->call('closeModal')
            ->assertDontSeeHtml('<div class="fixed w-screen h-screen');
    }

    /** @test */
    public function see_form_placeholder()
    {
        Livewire::test(CreateTaskButton::class)
            ->call('openModal')
            ->assertSeeHtml('<textarea')
            ->assertSee(__('ToDoList.textArea_placeholder'));
    }

    /** @test */
    public function see_form_error()
    {
        Livewire::test(CreateTaskButton::class)
            ->call('openModal')
            ->set('body','')
            ->call('createTask')
            ->assertHasErrors('body')
            ->assertNotDispatched('create-task');;
    }

    /** @test */
    public function dispatch_create()
    {
        Livewire::test(CreateTaskButton::class)
            ->call('openModal')
            ->set('body', 'text of task')
            ->call('createTask')
            ->assertHasNoErrors('body')
            ->assertDispatched('create-task');
    }

    
}
