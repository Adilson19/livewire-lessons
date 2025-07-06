<div style="
    border: 1px solid black; 
    padding: 32px;
    background-color: {{$color}};">
    <h1>{{ $salutation }}, {{strtoupper($name)}}</h1>
    <select wire:model="salutation">
        @foreach ($salutationOptions as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>
    <input type="color" wire:model="color">
</div>
