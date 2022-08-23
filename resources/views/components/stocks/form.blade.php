<div class="bloco-principal">
    
    <div class="bloco-secundario">

        <!-- Button trigger modal -->
        <div class="bnt-stock-style">
            <button type="button" class="botao1-2 btn me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Adicionar produtos
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar produtos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('stocks.selected') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <?php foreach ($products as $key => $product) : ?>
                                <div class="form-check">
                                    <input name="produtoSelecionado[]" class="form-check-input" type="checkbox" value="{{ $product->id }}" id="{{ $key }}" multiple>
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
                </div>
            </div>
        </div>

        @isset($selectedProducts)
        <form action="{{ $action }}" method="post">
        @csrf

        
        
            <div class="bloco-secundario2">
                <div class="input-data-style">                   
                    <label for="data" class="form-label label-form-style2"> Data: </label>
                    <input type="date" id="data" name="data" class="form-control data-form-style">        
                </div>                      
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th width="40%" scope="col">Nome</th>
                            <th width="10%" scope="col"></th>
                            <th width="40%" scope="col">Quantidade</th>
                            <th width="10%" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($selectedProducts as $key => $selectedProduct) : ?>
                            <tr>
                                <td class="flex">{{ $selectedProduct->nome }}</td>
                                <th> Quantidade: </th>
                                <td class="">
                                    <input class="input-qtd-style" type="text" id="" name="quantidade[{{ $selectedProduct->id }}]" class="form-control">
                                </td>
                                <th></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-lg btn-criar-style">
                @if($update)Editar
                @else Criar
                @endif
            </button>
        </form>
        @endisset
    </div>                     
</div>