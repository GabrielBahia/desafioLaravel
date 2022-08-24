<x-layout title="Editar Estoque do dia {{ $stock->data }} ">
    <x-stocks.form :action="route('stocks.update', $stock->id)" :selectedProducts="$selectedProducts" :products="$products" :stock="$stock" :quantidadesProducts="$quantidadesProducts" :update="true" :action2="route('stocks.selected', $stock->id)"/>
</x-layout>