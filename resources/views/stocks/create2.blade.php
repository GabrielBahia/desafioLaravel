<x-layout title="Criar Novo Estoque">
    <x-stocks.formCreate :action="route('stocks.store')" :products="$products" :selectedProducts="$selectedProducts" :action2="route('stocks.selected')" :update="false" />
</x-layout>