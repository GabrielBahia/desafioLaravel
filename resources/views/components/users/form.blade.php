<div class="bloco-secundario">
    <form class="form-edit-style" action="{{ $action }}" method="post">
        @csrf

        @if($update)
            @method('PUT')
        @endif

        <div>
            <label for="name" class="form-label label-form-style"> Nome: </label>
            <input required ype="text" id="name" name="name" class="form-control" 
            @isset($user->name)value="{{ $user->name }}" @endisset>

            <label for="email" class="form-label label-form-style">Email:</label>
            <input required type="text" id="email" name="email" class="form-control"
            @isset($user->email)value="{{ $user->email }}" @endisset>

            <label for="matricula" class="form-label label-form-style">Matrícula:</label>
            <input required type="text" id="matricula" name="matricula" class="form-control"
            @isset($user->matricula)value="{{ $user->matricula }}" @endisset>

            <label class="form-label label-form-style" for="fidelidade">Fidelidade:</label>
            <input required type="text" id="fidelidade" name="fidelidade" class="form-control"
            @isset($user->fidelidade)value="{{ $user->fidelidade }}" @endisset>

            <label for="permissao" class="form-label label-form-style">Permissão:</label>
            <input required type="text" id="permissao" name="permissao" class="form-control"
            @isset($user->permissao)value="{{ $user->permissao }}" @endisset>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-lg botao1-2 px-2 mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
        </svg> Voltar</a>
        
        <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">Editar</button>
    </form>
</div>