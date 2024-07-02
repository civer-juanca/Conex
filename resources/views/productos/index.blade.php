@extends('layouts.app')
@section('titulo','consultar productos')
@section('contenido')
    <div class ="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
        @foreach ($productos as $producto)
            <div class="card w-60 bg-base-100 shadow-xl">
                <figure><img src="https://picsum.photos/200/200?random=2{{ $producto->nombre }}" alt="{{ $producto->nombre }}"></figure>
                    <div class="card-body">
                        <h2 class="card-title">
                            {{ $producto->nombre }}
                            <div class="badge badge-secondary">${{$producto->precio}}</div>
                        </h2>
                        <div class="card-actions justify-inid">
                            <div class="badge badge-secondary">Stock:{{$producto->stock}}</div>
                            <div class="badge badge-secondary">Tech</div>
                        </div>
                        <p>{{ Str::limit($producto->descripcion,50) }}</p>                      
                        <div class="card-actions justify-end">
                            <a href="{{ route ('productos.edit', $producto->id)}}" class="btn btn-xs btn-secondary">Editar</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-error">Eliminar</button>
                            </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
