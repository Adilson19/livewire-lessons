<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public function render()
    {
        return view('livewire.counter');
    }

    //public $number = 0;
    /*  Inves de duas funcoes, podemos ter uma unica funcao que recebe o valor a ser incrementado
    public function increment($quantity)
    {
        $this->number = $this->number + $quantity;
    }*/

    // Estamos criando duas funcoes, uma para incrementar e outra para decrementar
    public $number = 0;
    public function increment()
    {
        // Ele vai incrementar ate que que seja menor do que 5
        if($this->number < 50){
            $this->number = $this->number + 1;
        }
    }

    public function decrement()
    {
        // Ele vai decrementar ate que seja maior do que 0
        // Se for menor que 0, ele nao vai decrementar
        if($this-> number >0){
            $this->number  = $this->number - 1;
        }
    }
}
 