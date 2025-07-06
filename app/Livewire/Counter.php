<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }

    public function increment(){
        $this->number+1;
    }
}
