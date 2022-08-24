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
        </div>


    </div>
</x-layout>