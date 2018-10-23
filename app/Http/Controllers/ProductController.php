<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate();

        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('products.index')
                ->with('success', 'Producto guardado con éxito');
    }

    public function show(Product $product)
    {
      return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('product.edit', $product->id)
                ->with('success', 'Producto actualizado con éxito');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', 'Eliminado con éxito');
    }
}
