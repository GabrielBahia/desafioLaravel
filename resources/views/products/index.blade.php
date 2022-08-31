<x-layout title="Produtos">
    @isset($mensagemSucesso)
    <div class="alert alert-success alert-msg-style">
        {{ $mensagemSucesso}}
    </div>
    @endisset
    <div class="bloco-principal">
    @can('create', App\Models\Product::class)
        <div class="botao1">
            <a href="{{ route('products.create') }}" class="botao1-2 btn mb-2 me-md-2">Criar novo produto</a>
        </div>
    @endcan

        <div class="bloco-secundario">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th width="10%" scope="col">#</th>
                        <th width="40%" scope="col">Nome</th>
                        <th width="35%" scope="col">Preço</th>
                        <th width="15%" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <th class="flex" scope="row">{{ $product->id }}</th>
                            <td class="flex">{{ $product->nome }}</td>
                            <td class="flex">R$ {{ $product->preco }}</td>
                            <td class="">
                                <div class="tds-item-style">
                                    <a href="{{ route('products.show', $product->id) }}" class="botoes-marrom btn btn-item-table ">V</a>
                                    @can(['update', 'delete'], $user)
                                        <a href="{{ route('products.edit', $product->id) }}" class="botoes-marrom btn btn-item-table ">E</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-item-table " type="submit">X</button>
                                        </form>
                                    @endcan    
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</x-layout>
