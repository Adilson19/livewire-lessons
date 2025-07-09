<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class User extends Component
{
    public $name = 'Carregando...';
    public function render()
    {
        return view('livewire.user');
    }
    // Este metodo eh chamado quando o componente eh inicializado
    // Com o parametro Request, podemos acessar das via metodos GET ou POST
    public function mount(Request $request, $user)
    {
        $this->name = $user;
    }
}
