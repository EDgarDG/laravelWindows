@extends("../layouts/plantillaPlanoDepa")

@section("cabecera")

@endsection

@section("contenido1")

    <table class="border-collapse border border-slate-800 mx-auto">
        <thead>
            <tr class="bg-green-300">
                <th class="border border-slate-700 py-2.5 px-5">Nombre de Artículo</th>
                <th class="border border-slate-700 py-2.5 px-5">Descripción</th>
                <th class="border border-slate-700 py-2.5 px-5">Stock</th>
                <th class="border border-slate-700 py-2.5 px-5">Precio de compra</th>
            </tr>
        </thead>

        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td class="border border-slate-300 py-2.5 px-5">{{ $producto->nombre }}</td>
                    <td class="border border-slate-300 py-2.5 px-6">{{ $producto->descripcion }}</td>
                    <td class="border border-slate-300 py-2.5 px-5">{{ $producto->stock }}</td>
                    <td class="border border-slate-300 py-2.5 px-5">{{ $producto->precio_compra }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section("piePagina")

@endsection