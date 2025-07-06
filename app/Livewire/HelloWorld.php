<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Adelino Manuel';
    public $salutation = 'Hello';
    public $color = 'white';
    public $salutations = ['Hello', 'Bye Bye'];
    public function render()
    {
        return view('livewire.hello-world');
    }
}
