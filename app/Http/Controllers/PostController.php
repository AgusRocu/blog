<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('titulo', 'asc')->paginate(5);
        return view('posts.index', compact('posts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* return view('posts.create'); */
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $user = User::first();

        Post::create([
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
            'user_id' => $user->id
        ]);

        return redirect()->route('posts.index')->with('mensaje_ok', 'Post creado correctamente :)');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'titulo'=> $request->titulo,
            'contenido'=> $request->contenido,
        ]);

        return redirect()->route('posts.index')->with('mensaje_ok', 'Modificado correctamente :)');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
                     ->with('mensaje', 'Post eliminado correctamente.');
    }

    function nuevoPrueba(){
        $post = new Post();
        $rand  = rand(1,1000);
        $post->titulo = 'Post ' . $rand;
        $post->contenido = 'Contingut del nou post ' . $rand;
        $post->save();
        return redirect()->route('posts.index')->with('mensaje_ok', 'Post afegit correctament.');
    }

    function editPrueba($id){
        $post = Post::findOrFail($id);
        $post->titulo .= '[Editat]';
        $post->contenido .= '[Editat]';
        $post->save();
        return redirect()->route('posts.index')->with('mensaje_ok', 'Post modificat correctament.');
    }
}
