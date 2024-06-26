<?php

namespace App\Livewire;

use App\Models\Board;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ShowBoards extends Component
{


    public int $on_page = 5;

    #[Computed]
    public function getBoardsProperty(): Collection
    {
        return Board::where('user_id',auth()->user()->id)->latest()->take($this->on_page)->get();
    }

    public function loadMore(): void
    {
        $this->on_page += 5;
    }

    public function addBoard(){

        auth()->user()->boards()->create(['name'=>fake()->firstName]);
    }
    public function render()
    {
        return view('livewire.show-boards');
    }
}
