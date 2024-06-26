<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Component;

class Task extends Component
{

    public Task $task;

    public function render()
    {
        return view('livewire.task');
    }
}
