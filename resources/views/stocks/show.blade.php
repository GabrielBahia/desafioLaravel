<x-layout title="Estoque do dia: {{ $stock->data }} ">
    <div class="container">
        <div>
            <ul class="list-group">
                <?php foreach ($products as $product) : ?>
                    <li class="list-group-item flex" style="display:flex; flex-direction: row;">
                        <div>
                            Nome:
                            {{ $product->nome}}
                        </div>
                        <div style="margin-left: 5rem;">
                            Quantidade:
                            {{ $quantidadesProducts[$product->id] }}
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div>
            <h3>Quantidade total: {{ $stock->quantidade }} </h3>
        </div>
    </div>
</x-layout>