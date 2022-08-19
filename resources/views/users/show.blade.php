<x-layout title="Usuário: {{ $user->name }} ">
    <div class="card-info-style">
        <div class="infos-style">
            <label class="infos-style-text" for="">Nome: {{ $user->name }} </label>
            <label class="infos-style-text" for="">Sabor: {{ $user->email }}</label>
            <label class="infos-style-text" for="">Preço: R$ {{ $user->matricula }}</label>
            <label class="infos-style-text" for="">Descrição: {{ $user->fidelidade }}</label>
            <label class="infos-style-text" for="">Descrição: {{ $user->permissao }}</label>
        </div>
    </div>

</x-layout>