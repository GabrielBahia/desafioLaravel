<div class="bloco-principal">
    
    <div class="bloco-secundario">
        @if(isset($selectedProductsTotal))
            <form action="{{ $action }}" method="post"> 
            @csrf
            @method('PUT')
        
            <div class="bloco-secundario2">
                <div class="input-data-style">                   
                    <label for="data" class="form-label label-form-style2"> Data: </label>
                    <input required type="date" id="data" name="data" class="form-control data-form-style" @isset($stock->data) value="{{ $stock->data }}" @endisset>        
                </div>                      
                <table class="table table-custom bloco-secundario3">
                    <thead>
                        <tr>
                            <th width="40%" scope="col">Nome</th>
                            <th width="10%" scope="col"></th>
                            <th width="40%" scope="col">Quantidade</th>
                            <th width="10%" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($selectedProductsTotal as $key => $selectedProduct) : ?>
                            <tr>
                                <td class="flex">{{ $selectedProduct->nome }}</td>
                                <th> Quantidade: </th>
                                <td class="">
                                    <input required class="input-qtd-style" type="text" id="" name="quantidade[{{ $selectedProduct->id }}]" class="form-control" @isset($quantidadesProducts[$selectedProduct->id]) value="{{ $quantidadesProducts[$selectedProduct->id] }}" @endisset>
                                </td>
                                <th></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-lg btn-criar-style">
                Editar
            </button>
        </form>
        @endif
    </div>                     
</div>