<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $datos['categorias']=Categorias::paginate(4);
        return view('categorias.index',$datos);
    }

    public function create()
    {
        return view('categorias.create');
        return view('categorias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'nombre_categoria' => 'required|string|max:100',
        ]);

        $datosCategoria = request()->except('_token');
        $imagen = $request->file('foto');
        if ($imagen && $imagen->isValid()) {
            $rutaCarpeta = 'storage/uploads';
            $nombreImagen = $imagen->getClientOriginalName();
            $request->file('foto')->move($rutaCarpeta, $nombreImagen);
            $datosCategoria['foto'] = $nombreImagen;
        }

        Categorias::insert($datosCategoria);
        return redirect()->route('categorias.index')->with('success', 'Categoría registrado con éxito.');
    }

    public function edit(string $id)
    {
        $categoria = Categorias::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'nombre_categoria' => 'string|max:100',
        ]);

        $datosCategoria = request()->except(['_token', '_method']);
        $imagen = $request->file('foto');
        if ($imagen && $imagen->isValid()) {
            $rutaCarpeta = 'storage/uploads';
            $nombreImagen = $imagen->getClientOriginalName();
            $request->file('foto')->move($rutaCarpeta, $nombreImagen);
            $datosCategoria['foto'] = $nombreImagen;
        }

        Categorias::where('ID','=',$id)->update($datosCategoria);
        $categoria = Categorias::findOrFail($id);
        return redirect()->route('categorias.index')->with('success', 'Categoría actualizado con éxito.');
    }

    public function destroy(string $id)
    {
        Categorias::where('id','=',$id)->delete();
        return redirect('categorias');
    }
}