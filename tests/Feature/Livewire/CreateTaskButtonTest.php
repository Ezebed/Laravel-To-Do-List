<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateTaskButton;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateTaskButtonTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateTaskButton::class)
            ->assertStatus(200);
    }
}
