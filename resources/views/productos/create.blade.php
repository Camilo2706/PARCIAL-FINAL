@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Producto</h1>
        <form method="POST" action="{{ route('productos.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del producto"></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="mb-3">
                <label for="cantidad_en_stock" class="form-label">Cantidad en Stock</label>
                <input type="number" class="form-control" id="cantidad_en_stock" name="cantidad_en_stock" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
