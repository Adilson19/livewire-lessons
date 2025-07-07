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

    //  Inves de duas funcoes, podemos ter uma unica funcao que recebe o valor a ser incrementado
    public function increment($quantity)
    {
        $this->number = $this->number + $quantity;
    }
}
 