<x-layout title="Criar Novo Produto">
    <x-products.form :action="route('products.store')" :nome="old('nome')" :update="false"/>
</x-layout>