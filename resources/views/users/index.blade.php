<x-layout title="Usuários">
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso}}
        </div>
    @endisset    
    <div class="bloco-principal">

        <div class="bloco-secundario">
            <table class="table table-style">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Matrícula</th>
                    <th scope="col">Fidelidade</th>
                    <th scope="col">Permissão</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr >
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->matricula}}</td>
                            <td>{{ $user->fidelidade}}</td>
                            <td>{{ $user->permissao}}</td>
                            <td class="tds-style">
                                <a href="" class="botoes-marrom btn tds-item-style">Ver</a>
                                <a href="" class="botoes-marrom btn  tds-item-style">Editar</a>
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger tds-item-style" type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
