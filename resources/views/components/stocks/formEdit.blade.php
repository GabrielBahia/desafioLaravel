<div class="bloco-principal">
    
    <div class="bloco-secundario2">
        @if(isset($selectedProductsTotal))
            <form action="{{ $action }}" method="post"> 
            @csrf
            @method('PUT')
        
            <div class="bloco-secundario">
                <div class="input-data-style">                   
                    <label for="data" class="form-label label-form-style2"> Data: </label>
                    <input required type="date" id="data" name="data" class="form-control data-form-style" @isset($stock->data) value="{{ $stock->data }}" @endisset>        
                </div>                      
                <table class="table table-custom table-edit-stock">
                    <thead>
                        <tr>
                            <th width="40%" scope="col">Nome</th>
                            <th width="40%" scope="col">Quantidade</th>
                            <th width="10%" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($selectedProductsTotal as $key => $selectedProduct) : ?>
                            <tr>
                                <td class="flex">{{ $selectedProduct->nome }}</td>
                                <td class="">
                                    <input required class="input-qtd-style" type="number" min="1" max="100" name="quantidade[{{ $selectedProduct->id }}]" class="form-control" @isset($quantidadesProducts[$selectedProduct->id]) value="{{ $quantidadesProducts[$selectedProduct->id] }}" @endisset>
                                </td>
                                <th></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="area-btns-edit">
                <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">
                    Editar
                </button>
                <a href="{{ route('stocks.index') }}" class="btn btn-lg botao1-2 px-2 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                </svg> Voltar</a>

            </div>
        </form>
        @endif
    </div>                     
</div>