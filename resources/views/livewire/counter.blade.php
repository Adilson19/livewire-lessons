<div>
    <h1>Contador de Estrelas (0-6): {{ $number }}</h1>
    {{-- Para inves de usar variaveis ele pega diretamente os elementos que estao na pagina --}}
    {{-- <button wire:mouseenter="increment($event.target.innerText)">1</button>
    <button wire:click="increment($event.target.innerText)">2</button> --}}

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
</div>
