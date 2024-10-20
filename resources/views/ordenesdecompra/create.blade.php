@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Orden de Compra</h1>
        <form method="POST" action="{{ route('ordenes.store') }}">
            @csrf
            <div class="mb-3">
                <label for="producto_id" class="form-label">Producto</label>
                <select name="producto_id" class="form-control" required>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="proveedor_id" class="form-label">Proveedor</label>
                <select name="proveedor_id" class="form-control" required>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>

            <div class="mb-3">
                <label for="fecha_orden" class="form-label">Fecha de Orden</label>
                <input type="date" class="form-control" id="fecha_orden" name="fecha_orden" required>
            </div>

            <div class="mb-3">
                <label for="fecha_entrega_estimada" class="form-label">Fecha Estimada de Entrega</label>
                <input type="date" class="form-control" id="fecha_entrega_estimada" name="fecha_entrega_estimada">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('ordenes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
