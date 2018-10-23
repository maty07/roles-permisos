<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:products.index')->only('index');
      $this->middleware('permission:products.create')->only(['create', 'store']);
      $this->middleware('permission:products.show')->only('show');
      $this->middleware('permission:products.edit')->only(['edit', 'update']);
      $this->middleware('permission:products.destroy')->only(['destroy']);
    }

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
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('products.edit', $product->id)
                ->with('success', 'Producto actualizado con éxito');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', 'Eliminado con éxito');
    }
}
