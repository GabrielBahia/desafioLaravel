<x-layout title="Editar Estoque do dia {{ $stock->created_at }} ">
    <x-products.form :action="route('stocks.update', $stock->id)" :stock="$stock" :update="true"/>
</x-layout>