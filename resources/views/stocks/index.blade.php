<x-layout title="Estoques">
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso}}
        </div>
    @endisset    
    <div class="bloco-principal">


        <div class="botao1">  
            <a href="" class="botao1-2 btn mb-2 me-md-2">Criar novo estoque</a>
        </div>

        <div class="bloco-secundario">
            <table class="table table-style">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stocks as $stock)
                        <tr >
                            <th scope="row">{{ $stock->id }}</th>
                            <td>{{ $stock->nome }}</td>
                            <td>{{ $stock->quantidade }}</td>
                            <td>{{ $stock->created_at }}</td>
                            <td class="tds-style">
                                <a href="" class="botoes-marrom btn tds-item-style">Ver</a>
                                <a href="" class="botoes-marrom btn  tds-item-style">Editar</a>
                                <form action="" method="post">
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
