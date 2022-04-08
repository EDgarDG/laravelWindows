@extends("../layouts/plantillaPlanoDepa")

@section("cabecera")

@endsection

@section("contenido1")

    <!-- SABER QUE DEVUELVE UNA RUTA -->
    <!-- {{ route('planoDepa.store') }} -->
    
    <form action="{{ route('planoDepa.store') }}" method="POST" enctype="multipart/form-data">

        <!-- TOKEN CSRF MEDIDA DE SEGURIDAD EN LARAVEL PARA LOS FORMULARIOS
        DIRECTIVA CON UN INPUT OCULTO, SE ENCARGA DE GENERAR UN TOKEN -->
        @csrf
        @csrf_field()
        <!-- {{ csrf_field() }} -->

        <br><br>
        <label>Ingresar imagen:
            <br>
            <input type="file" name="fotoPlano">
        </label>
        <br><br>
        
        <button type="submit" class="border border-slate-300 py-2.5 px-5">Guardar Imagen</button>
        <br><br><br>
    </form>

    <table class="border-collapse border border-slate-800 mx-auto">
        <thead>
            <tr class="bg-green-300">
                <th class="border border-slate-700 py-2.5 px-5">Nombre de Artículo</th>
                <th class="border border-slate-700 py-2.5 px-5">Descripción</th>
                <th class="border border-slate-700 py-2.5 px-5">Stock</th>
                <th class="border border-slate-700 py-2.5 px-5">Precio de compra</th>
                <th class="border border-slate-700 py-2.5 px-5">Mostrar plano</th>
            </tr>
        </thead>

        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td class="border border-slate-300 py-2.5 px-5">{{ $producto->nombre }}</td>
                    <td class="border border-slate-300 py-2.5 px-6">{{ $producto->descripcion }}</td>
                    <td class="border border-slate-300 py-2.5 px-5">{{ $producto->stock }}</td>
                    <td class="border border-slate-300 py-2.5 px-5">{{ $producto->precio_compra }}</td>
                    <td class="border border-slate-300 py-2.5 px-5"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded" href="{{ asset('img/imagenPlano.jpg') }}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section("piePagina")

@endsection