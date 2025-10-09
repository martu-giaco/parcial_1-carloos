<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Listado de posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]); // fix: use view() instead of show()
    }

    // Vista de un post
    public function show($id)
    {
        $post = Post::findOrFail($id); // Usa la clave primaria 'id'
        return view('posts.view', compact('post'));
 // fix: use view() instead of show()
    }

    // Formulario para crear post
    public function create()
    {
        return view('posts.create'); // fix: use view() instead of show()
    }

    // Guardar post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
            'category' => 'required|string|max:50',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post creado con éxito!');
    }

    // Formulario para eliminar
    public function delete(int $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.delete', ['post' => $post]); // fix: use view() instead of show()
    }

    // Eliminar post
    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')
            ->with('feedback.message', 'Post <b>' . $post->title . '</b> deleted successfully.');
    }
}
