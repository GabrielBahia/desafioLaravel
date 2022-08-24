@component('mail::message')

# {{ $nomeProduto }}

O Produto '{{ $nomeProduto }}' foi criado.
    - Nome: {{ $nomeProduto }}
    - Preço: {{ $precoProduto }}
    - Sabor: {{ $saborProduto }}
    - Descrição: {{ $descricaoProduto }}
  
Acesse aqui:

@component('mail::button', ['url' => route('products.index', $idProduto)])
    Ver produto
@endcomponent

@endcomponent
