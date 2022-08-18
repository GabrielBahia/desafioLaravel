<x-layout title="Produtos">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">  
        <a href="/produtos/criar" class="btn btn-dark mb-2 me-md-2">Criar novo produto</a>
    </div>

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
            @foreach($produtos as $produto)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td >
                        <button class="btn btn-primary" type="submit">Ver</button>
                        <button class="btn btn-primary" type="submit">Editar</button>
                        <button class="btn btn-primary" type="submit">Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
