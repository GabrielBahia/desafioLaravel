<x-layout title="Usuário: {{ $user->name }} ">
    <div class="card-info-style">
        <div class="infos-style">
            <label class="infos-style-text" for="">Nome: {{ $user->name }} </label>
            <label class="infos-style-text" for="">Email: {{ $user->email }}</label>
            <label class="infos-style-text" for="">Matrícula: {{ $user->matricula }}</label>
            <label class="infos-style-text" for="">Fidelidade: {{ $user->fidelidade }}</label>
            <label class="infos-style-text" for="">Permissão: {{ $user->permissao }}</label>
        </div>
    </div>

</x-layout>