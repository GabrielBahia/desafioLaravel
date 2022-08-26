<x-layout title="Editar Estoque do dia {{ $stock->data }} ">
    <x-stocks.formEdit  :action="route('stocks.update', $stock->id)" :products="$products" :mensagemErro="$mensagemErro" :stock="$stock" :quantidadesProducts="$quantidadesProducts" :selectedProductsTotal="$selectedProductsTotal" :update="true" />
</x-layout>