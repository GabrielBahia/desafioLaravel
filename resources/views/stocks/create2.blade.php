<x-layout title="Criar Novo Estoque">
    <x-stocks.formCreate :action="route('stocks.store')" :mensagemErro="$mensagemErro" :selectedProducts="$selectedProducts"  :update="false" />
</x-layout>