<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\ProductosRequest;

class ProductosController extends Controller
{

    public function index()
    {
        $productos = Producto::get();
        return $productos;
    }

    public function create()
    {
        //$producto = Producto::get()->last();
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $producto = new Producto($request->all());
        $producto->save();
        return redirect()->route('productos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
