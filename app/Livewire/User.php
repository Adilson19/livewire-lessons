<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = 'Adelino';
    public $hookName = 'N/A';
    public $propertyName = 'N/A';
    public $propertyValue = 'N/A';
    public function render()
    {
        return view('livewire.user');
    }
    // Este metodo eh chamado quando o componente eh inicializado
    // Com o parametro Request, podemos acessar das via metodos GET ou POST
    /*public function mount(Request $request, $user)
    {
        $this->name = $user;
    }*/

    //  Sempre que o componente for alterado, ele ira renderizar esse hooks
    public function updated($property, $value){
        $this->name = ucfirst($this->name);
        $this->hookName = 'Updated';
        $this->propertyName = $property;
        $this->propertyValue = $value;
    }
}
