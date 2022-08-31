<div class="bloco-secundario">
    <form class="form-edit-style" action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

        <div>
            <label for="nome" class="form-label label-form-style"> Nome: </label>
            <input required type="text" id="nome" name="nome" class="form-control" 
            @isset($product->nome)value="{{ $product->nome }}" @endisset>

            <label for="sabor" class="form-label label-form-style">Sabor:</label>
            <input required type="text" id="sabor" name="sabor" class="form-control"
            @isset($product->sabor)value="{{ $product->sabor }}" @endisset>

            <label for="preco" class="form-label label-form-style">Preço:</label>
            <input required type="number" id="preco" name="preco" class="form-control"
            @isset($product->preco)value="{{ $product->preco }}" @endisset>

            <label class="form-label label-form-style" for="descricao">Descrição:</label>
            <input required type="text" id="descricao" name="descricao" class="form-control"
            @isset($product->descricao)value="{{ $product->descricao }}" @endisset>

            <label for="foto" class="form-label label-form-style">Foto:</label>
            <input required type="text" id="foto" name="foto" class="form-control"
            @isset($product->foto)value="{{ $product->foto }}" @endisset>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-lg botao1-2 px-2 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
        </svg> Voltar</a>

        <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">
        @if($update)Editar 
        @else Criar 
        @endif
        </button>
    </form>
</div>