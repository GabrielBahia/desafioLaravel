<x-layout title="Produtos">
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso}}
    </div>
    @endisset
    <div class="bloco-principal">


        <div class="botao1">
            <a href="{{ route('products.create') }}" class="botao1-2 btn mb-2 me-md-2">Criar novo produto</a>
        </div>

        <div class="bloco-secundario">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <th class="flex" scope="row">{{ $product->id }}</th>
                            <td class="flex">{{ $product->nome }}</td>
                            <td class="flex">R$ {{ $product->preco }}</td>
                            <td class="tr-edit-style">
                                <a href="{{ route('products.show', $product->id) }}" class="botoes-marrom btn tds-item-style">Ver</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="botoes-marrom btn  tds-item-style">Editar</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger tds-item-style" type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</x-layout>