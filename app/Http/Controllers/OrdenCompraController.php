<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index()
    {
        $ordenes = OrdenCompra::with(['producto', 'proveedor'])->get();
        return view('ordenes.index', compact('ordenes'));
    }

    public function create()
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('ordenes.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|integer',
            'fecha_orden' => 'required|date',
            'fecha_entrega_estimada' => 'nullable|date',
        ]);

        OrdenCompra::create($request->all());

        return redirect()->route('ordenes.index')->with('success', 'Orden creada.');
    }

    public function edit(OrdenCompra $orden)
    {
        $productos = Producto::all();
        $proveedores = Proveedor::all();
        return view('ordenes.edit', compact('orden', 'productos', 'proveedores'));
    }

    public function update(Request $request, OrdenCompra $orden)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|integer',
            'fecha_orden' => 'required|date',
            'fecha_entrega_estimada' => 'nullable|date',
        ]);

        $orden->update($request->all());

        return redirect()->route('ordenes.index')->with('success', 'Orden actualizada.');
    }

    public function destroy(OrdenCompra $orden)
    {
        $orden->delete();
        return redirect()->route('ordenes.index')->with('success', 'Orden eliminada.');
    }
}
