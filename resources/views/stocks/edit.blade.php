<x-layout title="Editar Estoque do dia {{ $stock->data }} ">
    <x-stocks.formEdit :action="route('stocks.update', $stock->id)" :selectedProductsTotal="$selectedProductsTotal" :products="$products" :stock="$stock" :quantidadesProducts="$quantidadesProducts" :update="true" />
</x-layout>