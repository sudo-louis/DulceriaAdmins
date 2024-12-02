<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos=Productos::paginate(4);

        $ctdb = Categorias::all();

        return view('productos.index',compact("productos", "ctdb"));
    }

    public function create()
    {
        $ctdb = Categorias::all();
        return view('productos.create', compact('ctdb'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'nombre' => 'required|string|max:100',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string|max:255',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $datosProductos = request()->except('_token');
        $imagen = $request->file('foto');
        if ($imagen && $imagen->isValid()) {
            $rutaCarpeta = 'storage/uploads';
            $nombreImagen = $imagen->getClientOriginalName();
            $request->file('foto')->move($rutaCarpeta, $nombreImagen);
            $datosProductos['foto'] = $nombreImagen;
        }

        Productos::insert($datosProductos);
        return redirect()->route('productos.index')->with('success', 'Producto registrado con éxito.');
    }

    public function edit($id)
    {
        $ctdb = Categorias::all();
        $producto = Productos::findOrFail($id);
        return view('productos.edit', compact('producto', 'ctdb'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,webp,avif|max:2048',
            'nombre' => 'string|max:100',
            'cantidad' => 'numeric',
            'precio' => 'numeric',
            'descripcion' => 'string|max:255',
            'categoria_id' => 'exists:categorias,id',
        ]);

        $datosProductos = request()->except(['_token', '_method']);
        $imagen = $request->file('foto');
        if ($imagen && $imagen->isValid()) {
            $rutaCarpeta = 'storage/uploads';
            $nombreImagen = $imagen->getClientOriginalName();
            $request->file('foto')->move($rutaCarpeta, $nombreImagen);
            $datosProductos['foto'] = $nombreImagen;
        }

        Productos::where('id','=',$id)->update($datosProductos);
        $producto = Productos::findOrFail($id);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy($id)
    {
        Productos::where('id','=',$id)->delete();
        return redirect('producto');
    }
}