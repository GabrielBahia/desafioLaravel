<div class="bloco-principal">
    
    <div class="bloco-secundario">

        <form action="{{ route('stocks.selectedEdit') }}" method="post">
            @csrf
            <div class="modal-body">
                <?php foreach ($products as $key => $product) : ?>
                    <div class="form-check">
                        <input name="produtoSelecionado[]" class="form-check-input" type="checkbox" value="{{ $product->id }}" id="{{ $key }}" multiple>
                        <input name="id" value="{{ $stock->id }}" class="form-check-input" hidden>
                        <label class="form-check-label" style="color:black;" for="{{ $key }}">
                            {{ $product->nome }}
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
  

        <button type="button" class="botao1-2 btn me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Adicionar produtos
        </button>

    </div>                     
</div>