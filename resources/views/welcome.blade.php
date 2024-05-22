    @extends('layouts.app')
    @section('titulo','consultar productos')
    @section('contenido')

    <div class ="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
            @foreach ($productos as $producto)
                <div class="card w-60 bg-base-100 shadow-xl">
                        <figure><img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                        <div class="card-body">
                            <h2 class="card-title">
                            {{ $producto["nombre"] }}
                            <div class="badge badge-secondary">NEW</div>
                        </h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                            <div class="badge badge-outline">${{ $producto["precio"] }}</div> 
                            <div class="badge badge-outline">Products</div>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    @endsection
