<?php

namespace App\Http\Controllers;

use Livewire\Component;

class BoardController extends Component
{
    public function render()
    {
        return view('livewire.show-posts')
            ->layout('layouts.base');
    }
}
