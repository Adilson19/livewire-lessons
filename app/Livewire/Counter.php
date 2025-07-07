<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }

    public $number = 0;

    public function incrementOne(){
        if($this->number == 2){
            $this->number = -5;
            return;
        }
        $this->number = $this->number + 1;
    }
    public function incrementTwo(){
        $this->number = $this->number + 2;
    }
}
 