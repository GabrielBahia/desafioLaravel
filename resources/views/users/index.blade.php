<x-layout title="Usuários">
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso}}
    </div>
    @endisset
    <div class="bloco-principal">

        <div class="bloco-secundario">
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th width="10%" scope="col">#</th>
                        <th width="40%" scope="col">Nome</th>
                        <th width="35%" scope="col">Email</th>
                        <th width="15%" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name}}</td>
                            <td >
                                <p class="limitaC-style">{{ $user->email}}</p>
                            </td>
                            <td class="">
                                <div class="tds-item-style">
                                    <a href="{{ route('users.show', $user->id) }}" class="botoes-marrom btn">V</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="botoes-marrom btn">E</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">X</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</x-layout>