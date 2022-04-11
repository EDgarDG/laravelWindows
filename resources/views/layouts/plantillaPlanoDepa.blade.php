<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Medico</title>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .modal {
            transition: opacity 0.25s ease;
        }
        
        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>
</head>
<body class="m-auto text-center">

    <div class="cabecera grid grid-cols-3 mx-auto text-center my-5">
        @yield("cabecera")

        <img class="w-40 m-auto" src="{{ asset('img/LogoCentroMedico.png') }}" alt="CentroMedico">
        <!-- <img src="/img/LogoCentroMedico.png" alt="CentroMedico"> -->
        
        <h1 class="m-auto text-5xl font-bold">Vista para los planos</h1>
    
        <img class="w-40 m-auto" src="{{ asset('img/LogoCentroMedico.png') }}" alt="CentroMedico">
    </div>

    <div class="contenido-1">
        @yield("contenido1")
        <!-- <a href="{{ route('planoDepa.index') }}">Plano departamentos</a> -->

        
    </div>

    <div class="piePagina">
        @yield("piePagina")

        <h1>pie</h1>

    </div>

</body>
</html>