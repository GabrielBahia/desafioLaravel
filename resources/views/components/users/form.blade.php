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
        <button type="submit" class="btn btn-lg botao1-2 px-4 mt-3">Editar</button>
    </form>
</div>