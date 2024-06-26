<?php

namespace App\Livewire;

use App\Models\Board;
use App\Models\Column;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowBoard extends Component
{

    public Board $board;

    #[On('board-update')]
    public function updateBoard(): void
    {
        $this->board->refresh();
    }

    public function deleteColumn(Column $column): void
    {
        $column->delete();
        $this->board->refresh();
    }

    public function render()
    {
        return view('livewire.show-board');
    }
}
