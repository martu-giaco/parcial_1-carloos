<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product; // Importar Product
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Listar todas las reviews
    public function index()
    {
        $reviews = Review::with('product')->latest()->get(); // Trae reviews con el Plan relacionado
        return view('reviews.index', compact('reviews'));
    }

    // Mostrar formulario
    public function create()
{
    $products = Product::all();
    return view('reviews.create', compact('products'));
}


    // Guardar review
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:100',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'author' => $request->author,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return redirect()->route('reviews.index')
            ->with('feedback.message', 'Reseña creada correctamente.');
    }

    // Ver review individual (opcional)
    public function view(Review $review)
    {
        return view('reviews.view', compact('review'));
    }

    // Eliminar review
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index')
            ->with('feedback.message', 'Reseña eliminada correctamente.');
    }
}
