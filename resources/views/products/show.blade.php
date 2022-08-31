<x-layout title="Produto: {{ $product->nome }} ">
    <div class="card-info-style">
        <div class="imagem-style">
            <img class="h-100" src="https://www.drogariaminasbrasil.com.br/media/product/f7a/bombom-arcor-bon-o-bon-sabor-brigadeiro-15-g-c6b.jpg" alt="">
        </div>

        <div class="infos-style">
            <label class="infos-style-text" for="">Nome: {{ $product->nome }} </label>
            <label class="infos-style-text" for="">Sabor: {{ $product->sabor }}</label>
            <label class="infos-style-text" for="">Preço: R$ {{ $product->preco }}</label>
            <label class="infos-style-text" for="">Descrição: {{ $product->descricao }}</label>
        </div>
    </div>
</x-layout>