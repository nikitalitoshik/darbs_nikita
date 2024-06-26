<?php

namespace App\Livewire;

use App\Models\Board;
use App\Models\Column;
use Livewire\Component;

class AddTask extends Component
{

    public Column $column;

    public ?string $title = null;

    public ?string $content = null;

    public bool $confirmingAddingTask = false;

    public function addTask()
    {
        $this->column->tasks()->create(['title' => $this->title,
            'content'=>$this->content,
            'pos'=>$this->column->tasks()->first() ? $this->column->tasks()->first()->value('pos') + 1 : 1]);
        $this->reset('title','content');
        $this->dispatch('board-update');
    }

    public function render()
    {
        return view('livewire.add-task');
    }
}
