<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeiro Projeto Livewire</title>
    @livewireStyles
</head>
<body>
    <h1>Página do blade</h1>
    <livewire:user user='Adelino Manuel' age="25"/>

    {{-- Renderizando um outro livewire --}}
    @livewire('user', [
        'user' => 'Adelino 3'
    ])

    @livewireScripts
</body>
</html>
