<x-layout title="Criar Novo Produto">
    <form action="/produtos/salvar" method="post">
        @csrf 
        <div class="mt-5 mb-3 ">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">

            <label for="sabor" class="form-label">Sabor:</label>
            <input type="text" id="sabor" name="sabor" class="form-control">

            <label for="preco" class="form-label">Preço:</label>
            <input type="text" id="preco" name="preco" class="form-control">

            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>

            <label for="foto" class="form-label">Foto:</label>
            <input type="text" id="foto" name="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-lg btn-primary px-4">Criar</button>
    </form>
</x-layout>