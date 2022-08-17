
<x-layout title="Produtos">
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto }}</li> 
        @endforeach  
    </ul>
</x-layout>