<?php

namespace App\Livewire;

use App\Models\Board;
use App\Models\Column;
use Livewire\Component;

class ShowBoard extends Component
{

    public Board $board;


    public function addColumn()
    {
        $this->board->columns()->create(['title' => fake()->colorName]);
        $this->board->refresh();
    }

    public function addTask(Column $column)
    {
        $column->tasks()->create(['title' => fake()->sentence(),
        'pos'=>$column->tasks()->first() ? $column->tasks()->first()->value('pos') + 1 : 1]);
        $this->board->refresh();
    }


    public function deleteColumn(Column $column)
    {
        $column->delete();
        $this->board->refresh();
    }

    public function render()
    {
        return view('livewire.show-board');
    }
}
