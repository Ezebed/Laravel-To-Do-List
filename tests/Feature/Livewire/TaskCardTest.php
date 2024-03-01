<?php

namespace Tests\Feature\Livewire;

use App\Livewire\TaskCard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TaskCardTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(TaskCard::class)
            ->assertStatus(200);
    }
}
