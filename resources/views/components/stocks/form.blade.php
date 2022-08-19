<div class="bloco-secundario">
    <form class="form-edit-style" action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

        <div>
            <label for="nome" class="form-label label-form-style"> Produtos: </label>
            <input type="text" id="nome" name="nome" class="form-control"> 
        </div>

        <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">
        @if($update)Editar 
        @else Criar 
        @endif
        </button>
    </form>
</div>