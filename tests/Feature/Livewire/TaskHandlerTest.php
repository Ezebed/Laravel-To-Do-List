<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TaskHandler;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TaskHandlerTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TaskHandler::class)
            ->assertStatus(200);
    }
}
