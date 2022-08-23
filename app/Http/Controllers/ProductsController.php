<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsFormRequest;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user) 
    {
        $products = Product::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        return view('products.index', compact('products', 'user'))->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $this->authorize('create', $user);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsFormRequest $request)
    {   
        $produto = Product::create($request->all());
        return redirect()->route('products.index')
        ->with('mensagem.sucesso', "Produto '{$produto->nome}' foi criado com sucesso");   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, User $user)
    {
        $this->authorize('update', $user);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, ProductsFormRequest $request)
    {
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('mensagem.sucesso', "Produto '{$product->nome}' foi atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product, User $user)
    {
        $this->authorize('delete', $user);
        Product::destroy($product->id);
        return redirect()->route('products.index')
        ->with('mensagem.sucesso', "Produto '{$product->nome}' foi removido com sucesso");
    }
}
