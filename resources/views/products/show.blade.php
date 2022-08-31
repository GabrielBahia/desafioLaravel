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

            <div class="area-btn-voltar">
                <a href="{{ route('products.index') }}" class="btn btn-lg botao1-2 px-2 mt-3 btn-voltar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg> Voltar</a>
            </div>

        </div>

    </div>

</x-layout>