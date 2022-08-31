<div class="bloco-principal">
    <div class="bloco-secundario-selected">
        <div class="form-check-area">
            <form action="{{ route('stocks.selected') }}" method="post">
                @csrf

                    <label class="label-item2">Selecione os produtos do estoque:</label>

                    <?php foreach ($products as $key => $product) : ?>
                        <div class="form-check check-form-products">
                            <input name="produtoSelecionado[]" class="form-check-input check-item" type="checkbox" value="{{ $product->id }}" id="{{ $key }}" multiple>
                            <label class="form-check-label label-item" for="{{ $key }}">
                                {{ $product->nome }}
                            </label>
                            <hr></hr>
                        </div>
                    <?php endforeach; ?>

                    <button type="submit" class="botao1-2 btn me-md-2 btn-form-check" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Adicionar produtos
                    </button>
            </form>
        </div>                 
    </div>                     
</div>
