<x-layout title="Criar Novo Estoque">
    <x-stocks.form :action="route('stocks.store')" :products="$products" :selectedProducts="$selectedProducts" :update="false"/>
</x-layout>