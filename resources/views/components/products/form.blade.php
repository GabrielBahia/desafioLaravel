<div class="bloco-secundario">
    <form class="form-edit-style" action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

        <div>
            <label for="nome" class="form-label label-form-style"> Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control" 
            @isset($product->nome)value="{{ $product->nome }}" @endisset>

            <label for="sabor" class="form-label label-form-style">Sabor:</label>
            <input type="text" id="sabor" name="sabor" class="form-control"
            @isset($product->sabor)value="{{ $product->sabor }}" @endisset>

            <label for="preco" class="form-label label-form-style">Preço:</label>
            <input type="text" id="preco" name="preco" class="form-control"
            @isset($product->preco)value="{{ $product->preco }}" @endisset>

            <label class="form-label label-form-style" for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control"
            @isset($product->descricao)value="{{ $product->descricao }}" @endisset>

            <label for="foto" class="form-label label-form-style">Foto:</label>
            <input type="text" id="foto" name="foto" class="form-control"
            @isset($product->foto)value="{{ $product->foto }}" @endisset>
        </div>
        <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">
        @if($update)Editar 
        @else Criar 
        @endif
        </button>
    </form>
</div>