<?php

namespace App\Livewire;

use App\Models\Board;
use App\Models\Column;
use Livewire\Component;

class AddColumn extends Component
{

    public Board $board;

    public ?string $title = null;

    public bool $confirmingAddingColumn = false;

    public function addColumn()
    {
        $this->board->columns()->create(['title' => $this->title]);
        $this->reset('title');
        $this->dispatch('board-update');
    }

    public function render()
    {
        return view('livewire.add-column');
    }
}
