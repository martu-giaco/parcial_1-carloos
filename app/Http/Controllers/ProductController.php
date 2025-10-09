<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mostrar todos los Planes
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Formulario para crear Plan
    public function create()
    {
        return view('products.create');
    }

    // Guardar nuevo Plan
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('feedback.message', 'Plan creado correctamente.');
    }

    // Ver Plan individual
    public function view(Product $product)
    {
        return view('products.view', compact('product'));
    }



    // Actualizar Plan
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('feedback.message', 'Plan actualizado correctamente.');
    }

    // Eliminar Plan
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('feedback.message', 'Plan eliminado correctamente.');
    }
}
