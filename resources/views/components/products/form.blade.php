<form action="{{ $action }}" method="post">
    @csrf

    @isset($product)
        @method('PUT')
    @endisset

    <div class="mt-5 mb-3 ">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" 
        @isset($product->nome)value="{{ $product->nome }}" @endisset>

        <label for="sabor" class="form-label">Sabor:</label>
        <input type="text" id="sabor" name="sabor" class="form-control"
        @isset($product->sabor)value="{{ $product->sabor }}" @endisset>

        <label for="preco" class="form-label">Preço:</label>
        <input type="text" id="preco" name="preco" class="form-control"
        @isset($product->preco)value="{{ $product->preco }}" @endisset>

        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3">  
            @isset($product->descricao){{$product->descricao}}@endisset
        </textarea>

        <label for="foto" class="form-label">Foto:</label>
        <input type="text" id="foto" name="foto" class="form-control"
        @isset($product->foto)value="{{ $product->foto }}" @endisset>
    </div>
    <button type="submit" class="btn btn-lg btn-primary px-4">Criar</button>
</form>