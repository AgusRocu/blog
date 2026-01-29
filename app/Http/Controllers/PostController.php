<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
        return redirect()->route('inicio')
                     ->with('mensaje', 'Temporalmente no funciona el create :)');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        /* return view('posts.edit',compact('id')); */

        return redirect()->route('inicio')
                     ->with('mensaje', 'Temporalmente no funciona el edit :)');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
