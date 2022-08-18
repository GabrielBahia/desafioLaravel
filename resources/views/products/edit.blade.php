<x-layout title="Editar Produto {{ $product->nome }} ">
    <x-products.form :action="route('products.update', $product->id)" :product="$product"/>
</x-layout>