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
        <!-- @csrf_field() -->
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

                    @if($producto->nombre == "alajaz")
                        <td class="border border-slate-300 py-2.5 px-5"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded" type="button" onclick="toggleModal('modal-01')">Ver</button></td>
                    @elseif($producto->nombre == "Calzado")
                        <td class="border border-slate-300 py-2.5 px-5"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded" type="button" onclick="toggleModal('modal-01')">Ver</button></td>
                    @else
                        <td class="border border-slate-300 py-2.5 px-5">Sin Plano</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--Modal-->
    <div class="modal-01 opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div class="modal-container bg-white max-w-[44%] mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm">(Esc)</span>
            </div>
            
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <!-- <p class="text-2xl font-bold mx-auto">Plano Ceye</p> -->
                    <h1 class="text-2xl font-bold mx-auto">Plano Ceye</h1>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>
                
                <!--Body-->
                <map name="planoCEYE">
                    <area shape="RECT" coords="272,276,409,356" href="https://cmdt.com.mx/kardex/1058" target="_blank">
                    
                    <img class="w-full h-full" src="{{ asset('img/Plano_Ceye_editable.jpg') }}" id="img" alt="planoCEYE" usemap="#planoCEYE">
                </map>
            </div>
        </div>
    </div>

    <script>
        var openmodal = document.querySelectorAll('.modal-open')
        for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
                event.preventDefault()
                toggleModal()
            })
        }
        
        const overlay = document.querySelector('.modal-overlay')
        overlay.addEventListener('click', toggleModal)
        
        var closemodal = document.querySelectorAll('.modal-close')
        for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
        }
        
        document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
                isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
                isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
                toggleModal()
            }
        };
        
        function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal-01')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
        }
    </script>
    
@endsection

@section("piePagina")

@endsection