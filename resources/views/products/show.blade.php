<x-layout title="Produto: {{ $product->nome }} ">
    <div class="row">
        <div class="col">
            <div class="imagem-style">
                <img class="h-100" src="https://www.drogariaminasbrasil.com.br/media/product/f7a/bombom-arcor-bon-o-bon-sabor-brigadeiro-15-g-c6b.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="infos-style">
                <div>
                    <label for="">Nome: {{ $product->nome }} </label>
                    <label for="">Sabor: {{ $product->sabor }}</label>
                </div>
                <label for="">Preço: R$ {{ $product->preco }}</label>
                <label for="">Descrição: {{ $product->descricao }}</label>
            </div>
        </div>
    </div>
</x-layout>