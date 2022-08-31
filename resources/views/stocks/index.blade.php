<x-layout title="Estoques">
    @isset($mensagemSucesso)
    <div class="alert alert-success alert-msg-style">
        {{ $mensagemSucesso}}
    </div>
    @endisset
    <div class="bloco-principal">

        @can('create', App\Models\Stock::class)
            <div class="botao1">
                <a href="{{ route('stocks.create') }}" class="botao1-2 btn mb-2">Criar novo Estoque</a>
            </div>
        @endcan

        <div class="bloco-secundario">
            <table class="table table-custom table-area-stock">
                <thead>
                    <tr>
                        <th width="10%" scope="col">#</th>
                        <th width="40%" scope="col">Data</th>
                        <th width="35%" scope="col">Quantidade</th>
                        <th width="15%" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stocks as $stock) : ?>
                        <tr>
                            <th class="flex" scope="row">{{ $stock->id }}</th>
                            <td class="flex">{{ $stock->data}}</td>
                            <td class="flex">{{ $stock->quantidade }}</td>
                            <td class="">
                                <div class="tds-item-style">
                                    <a href="{{ route('stocks.show', $stock->id) }}" class="botoes-marrom btn btn-item-table">V</a>
                                    @can(['update', 'delete'], $user)
                                        <a href="{{ route('stocks.edit', $stock->id) }}" class="botoes-marrom btn btn-item-table">E</a>
                                        <form action="{{ route('stocks.destroy', $stock->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-item-table" type="submit">X</button>
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