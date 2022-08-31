<x-layout title="Estoque do dia: {{ $stock->data }} ">
    <div class="container">

        <div class="bloco-secundario">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th width="10%" scope="col">#</th>
                        <th width="40%" scope="col">Nome</th>
                        <th width="35%" scope="col">Quantidade</th>
                        <th width="15%" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product) : ?>
                        <tr>
                            <th class="flex" scope="row">{{ $product->id }} </th>
                            <td class="flex">{{ $product->nome}}</td>
                            <td class="flex">{{ $quantidadesProducts[$product->id]}} </td>
                            <td class="">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>


            <div>
                <h3>Quantidade total: {{ $stock->quantidade }} </h3>
            </div>

            <div> 
                <a href="{{ route('stocks.index') }}" class="btn btn-lg botao1-2 px-2 mt-3 btn-voltar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg> Voltar</a>
            </div>

        </div>


    </div>
</x-layout>