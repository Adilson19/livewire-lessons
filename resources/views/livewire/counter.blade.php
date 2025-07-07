<div>
    <h1>Contador de Estrelas (0-6): {{ $number }}</h1>
    {{-- Para inves de usar variaveis ele pega diretamente os elementos que estao na pagina --}}
    {{-- <button wire:mouseenter="increment($event.target.innerText)">1</button>
    <button wire:click="increment($event.target.innerText)">2</button> --}}

    <input wire:keydown.a.prevent="increment" wire:keydown.d.prevent="decrement" />


    <button wire:mouseover="increment">mouse over</button>
    <button wire:mouseout="decrement">mouse out</button>
</div>
