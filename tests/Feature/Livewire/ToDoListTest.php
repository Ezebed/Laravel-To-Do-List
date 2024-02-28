<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ToDoList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ToDoListTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ToDoList::class)
            ->assertStatus(200);
    }
}
