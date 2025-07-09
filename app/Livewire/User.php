<?php

namespace App\Livewire;

use Livewire\Component;

class User extends Component
{
    public $name = 'Carregando...';
    public function render()
    {
        return view('livewire.user');
    }
    // Este metodo eh chamado quando o componente eh inicializado
    public function mount($user)
    {
        $this->name = $user;
    }
}
