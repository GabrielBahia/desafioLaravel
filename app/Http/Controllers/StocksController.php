<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductStock;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;


class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        $stocks = Stock::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        return view('stocks.index', compact('stocks', 'user'))->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $this->authorize('create', $user);
        $products = Product::all();
        $selectedProducts = null;
        return view('stocks.create', compact('products', 'selectedProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StocksFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = ['data' => 'required', 'quantidade' => 'required'];
        $request->validate($rules);


        /*$validatedRequest = $request->validate([
            'data' => ['required'],
            'quantidade' => ['required', 'min:0']
        ]);*/

        $stock = DB::transaction(function () use ($request) {

            $quantidades = $request->quantidade;
            $quantidadeTotal = 0;
            $productsId = [];

            foreach ($quantidades as $key => $quantidade) {
                $quantidadeTotal += $quantidade;
                $productsId[] = $key;
            }

            $stock = Stock::create(['quantidade' => $quantidadeTotal, 'data' => $request->data]);

            $stock->products()->sync($productsId);

            foreach ($productsId as $key => $product) {
                ProductStock::where('product_id', $product)->where('stock_id', $stock->id)->update(['quantidade_product' => $quantidades[$product]]);
            }

            return $stock;
        });

        return redirect()->route('stocks.index')
            ->with('mensagem.sucesso', "Estoque da data '{$stock->data}' foi criado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        $productstocks = [];
        $productstocks = ProductStock::where('stock_id', $stock->id)->get();

        $quantidadesProducts = [];
        $productIds = [];

        foreach ($productstocks as $productstock) {
            $productIds[] = $productstock->product_id;
            $quantidadesProducts[$productstock->product_id] = $productstock->quantidade_product;
        }

        $products = [];

        $products = Product::whereIn('id', $productIds)->get();

        return view('stocks.show', compact('stock', 'products', 'quantidadesProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock, User $user)
    {
        $this->authorize('update', $user);

        $products = Product::all();
        $productstocks = [];
        $productstocks = ProductStock::where('stock_id', $stock->id)->get();

        $quantidadesProducts = [];
        $productIds = [];

        foreach ($productstocks as $productstock) {
            $productIds[] = $productstock->product_id;
            $quantidadesProducts[$productstock->product_id] = $productstock->quantidade_product;
        }

        $selectedProductsTotal = [];
        
        foreach ($productIds as $productId) {
            $selectedProductsTotal[] = Product::find($productId);
        }


        return view('stocks.edit', compact('stock', 'products', 'selectedProductsTotal', 'quantidadesProducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Stock $stock, Request $request)
    {
        $stock = DB::transaction(function () use ($request , $stock) {

            $quantidades = $request->quantidade;
            $quantidadeTotal = 0;
            $productsId = [];

            foreach ($quantidades as $key => $quantidade) {
                $quantidadeTotal += $quantidade;
                $productsId[] = $key;
            }

            $stock->update(['quantidade' => $quantidadeTotal, 'data' => $request->data]);

            $stock->products()->sync($productsId);

            foreach ($productsId as $key => $product) {
                ProductStock::where('product_id', $product)->where('stock_id', $stock->id)->update(['quantidade_product' => $quantidades[$product]]);
            }

            return $stock;
        });
        
        return redirect()->route('stocks.index')
            ->with('mensagem.sucesso', "O estoque da data'{$stock->data}' foi atualizado com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Stock $stock, User $user)
    {
        $this->authorize('delete', $user);
        Stock::destroy($stock->id);
        return redirect()->route('stocks.index')
            ->with('mensagem.sucesso', "O estoque da data '{$stock->data}' foi removido com sucesso");
    }

    
    public function selectedProductsEdit(Request $request)
    {   

        $selectedProducts = Product::whereIn('id', $request->produtoSelecionado)->get();
        $products = Product::all();
        $stock = Stock::find($request->id);

        // Pega todos os ids de productstock que possuem o id do stock que esta sendo atualizado
        $productstocks = [];
        $productstocks = ProductStock::where('stock_id', $stock->id)->get();

        $quantidadesProducts = [];  // Array relacional do produtos que já estao no estoque(id do produto => quantidade do produto)
        $productIds = [];           // Ids dos produtos que ja estao no estoque
        $selectedProductsTotal = [];// Lista de selecionados + lista de produtos que ja estao no estoque

        foreach ($productstocks as $productstock) {
            $productIds[] = $productstock->product_id;
            $selectedProductsTotal[] = Product::find($productstock->product_id);
            $quantidadesProducts[$productstock->product_id] = $productstock->quantidade_product;
        }

        // Pega a lista de produtos selecionados e verifica se já existe no estoque, caso não exista coloca o produto na lista de seleciados
        foreach($selectedProducts as $key => $selectedProduct) { 
            if(!in_array($selectedProduct->id, $productIds)){
                $selectedProductsTotal[] = Product::find($selectedProduct->id);
            }
        }

        return view('stocks.edit', compact('selectedProductsTotal', 'products', 'stock' ,'quantidadesProducts'));
    }


    public function selectedProducts(Request $request)
    {   
        $selectedProducts = Product::whereIn('id', $request->produtoSelecionado)->get();
        $products = Product::all();

        return view('stocks.create', compact('selectedProducts', 'products'));
    }




}
