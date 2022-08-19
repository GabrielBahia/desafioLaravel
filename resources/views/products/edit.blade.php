<x-layout title="Editar Produto {{ $product->nome }} ">
    <x-products.form :action="route('products.update', $product->id)" :product="$product" :update="true"/>
</x-layout>