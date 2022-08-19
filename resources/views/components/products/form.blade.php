<div class="bloco-secundario">
    <form class="form-edit-style" action="{{ $action }}" method="post">
        @csrf

        @isset($product)
            @method('PUT')
        @endisset

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
            <textarea class="form-control" id="descricao" name="descricao" rows="3">  
                @isset($product->descricao){{$product->descricao}}@endisset
            </textarea>

            <label for="foto" class="form-label label-form-style">Foto:</label>
            <input type="text" id="foto" name="foto" class="form-control"
            @isset($product->foto)value="{{ $product->foto }}" @endisset>
        </div>
        <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">Criar</button>
    </form>
</div>