<div class="bloco-principal">
    <div class="bloco-secundario">

        <form action="{{ route('stocks.selected') }}" method="post">
            @csrf
                <?php foreach ($products as $key => $product) : ?>
                    <div class="form-check">
                        <input name="produtoSelecionado[]" class="form-check-input" type="checkbox" value="{{ $product->id }}" id="{{ $key }}" multiple>
                        <label class="form-check-label" style="color:black;" for="{{ $key }}">
                            {{ $product->nome }}
                        </label>
                    </div>
                <?php endforeach; ?>

                <button type="submit" class="botao1-2 btn me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Adicionar produtos
                </button>
        </form>

    </div>                     
</div>
