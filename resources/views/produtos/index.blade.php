
<x-layout title="Produtos">
    <a href="/produtos/criar">Criar novo produto</a>
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto }}</li> 
        @endforeach  
    </ul>
</x-layout>