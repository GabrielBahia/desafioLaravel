<div class="bloco-principal">

    <div class="bloco-secundario">
        @isset($mensagemErro)
        <div class="alert alert-danger alert-msg-style">
            {{ $mensagemErro}}
        </div>
        @endisset


        @if(isset($selectedProducts) || $update)
        <form action="{{ $action }}" method="post">
            @csrf

            @if($update)
            @method('PUT')
            @endif
            <?php $selectedProducts2 = $selectedProducts;?>

            <div class="bloco-secundario2">
                <div class="input-data-style">
                    <label for="data" class="form-label label-form-style2"> Data: </label>
                    <input required type="date" id="data" name="data" class="form-control data-form-style" @isset($stock->data) value="{{ $stock->data }}" @endisset>
                </div>
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th width="40%" scope="col">Nome</th>
                            <th width="40%" scope="col">Quantidade</th>
                            <th width="10%" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <input hidden name="selectedProducts2[]" value="{{ json_encode($selectedProducts2, TRUE) }}" id="selectedProducts2">
                        <?php foreach ($selectedProducts as $key => $selectedProduct) : ?>
                            <tr>
                                <td class="flex">{{ $selectedProduct->nome }}</td>
                                <td class="">
                                    <input required class="input-qtd-style" type="number" min="1" max="100" id="quantidade" name="quantidade[{{ $selectedProduct->id }}]" class="form-control" @isset($quantidadesProducts[$selectedProduct->id]) value="{{ $quantidadesProducts[$selectedProduct->id] }}" @endisset>
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
        @endif
    </div>
</div>