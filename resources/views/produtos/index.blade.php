
<x-layout title="Produtos">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">  
        <a href="/produtos/criar" class="btn btn-dark mb-2 me-md-2">Criar novo produto</a>
    </div>
    <ul class="list-group gap-2 mt-2">
        @foreach($produtos as $produto)
            <li class="list-group-item">{{ $produto }}</li> 
        @endforeach  
    </ul>
</x-layout>