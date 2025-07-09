<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = 'Adelino';
    public $hookName = [];
    //public $propertyName = 'N/A';
    //public $propertyValue = 'N/A';
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
    public function updatingName(){
        //$this->name = ucfirst($this->name);
        $this->hookName = 'UpdatingName';
        //$this->propertyName = $property;
        //$this->propertyValue = $value;
    }

    public function updated(){
        $this->hookName = 'UpdatedName';
    }

    public function mount()
    {
        $this->hookName[] = 'mount';
    }

    // Este metodo funciona nas funcoes subsequentes
    public function boot(){
        $this->hookName[] = 'boot';
    }

    // Este metodo funciona depois do boot acontecer
    public function booted(){
        $this->hookName[] = 'booted';
    }
    // Este metodo eh chamado quando o front-end recebe dados do back-end
    public function hydrate(){
        $this->hookName[] = 'hydrate';
    }

}
