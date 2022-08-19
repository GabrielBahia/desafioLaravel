<x-layout title="Produtos">
    <div class="bloco-principal">

        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso}}
            </div>
        @endisset    

        <div class="botao1">  
            <a href="{{ route('products.create') }}" class="btn btn-dark mb-2 me-md-2">Criar novo produto</a>
        </div>

        <div class="bloco-secundario">
            <table class="table table-style">
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
                            <td class="tds-style">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary tds-item-style">Ver</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary tds-item-style">Editar</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger tds-item-style" type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
