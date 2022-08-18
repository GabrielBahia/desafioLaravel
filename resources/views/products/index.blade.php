<x-layout title="Produtos">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">  
        <a href="{{ route('products.create') }}" class="btn btn-dark mb-2 me-md-2">Criar novo produto</a>
    </div>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso}}
        </div>
    @endisset    

    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr >
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->nome }}</td>
                    <td>R$ {{ $product->preco }}</td>
                    <td>
                        <button class="btn btn-primary" type="submit">Ver</button>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
